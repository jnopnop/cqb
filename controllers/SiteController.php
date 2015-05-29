<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\AirsoftEvent;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
//        $calendarEvents = array();
//        foreach( AirsoftEvent::find()->all() as $event)
//        {
//            $calendarEvents[] = $event->toCalendarEvent();
//        }
        //var_dump($calendarEvents);
        return $this->render('index');
    }

    public function  actionScheduleEvent($id) {
        $Event = AirsoftEvent::find()->where(['id' => $id])->one();
        echo Json::encode($Event);
        Yii::$app->end();
    }

    public function actionSchedule($start=NULL,$end=NULL,$_=NULL)
    {
//        $events = array();
//        //Testing
//        $Event = new \yii2fullcalendar\models\Event();
//        $Event->id = 1;
//        $Event->title = 'Пятничный Deathmath';
//        $Event->backgroundColor = '#333';
//        $Event->start = date('Y-m-d\Th:m:s\Z');
//        $events[] = $Event;
//
//        $Event = new \yii2fullcalendar\models\Event();
//        $Event->id = 2;
//        $Event->title = 'Testing';
//        $Event->start = date('Y-m-d\Th:m:s\Z',strtotime('tomorrow 6am'));
//        $events[] = $Event;
//
//        header('Content-type: application/json');
        $calendarEvents = array();
        foreach( AirsoftEvent::find()->all() as $event)
        {
            $calendarEvents[] = $event->toCalendarEvent();
        }
        echo Json::encode($calendarEvents);

        Yii::$app->end();
    }

    public function actionLogin()
    {

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
