<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Event');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error)
        {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm']))
        {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate())
            {
                $name = '=?UTF-8?B?'.base64_encode($model->name).'?=';
                $subject = '=?UTF-8?B?'.base64_encode($model->subject).'?=';
                $headers = "From: $name <{$model->email}>\r\n".
                    "Reply-To: {$model->email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/plain; charset=UTF-8";
                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm']))
        {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        $this->render('login', array('model' => $model));
    }

    /**
     * Displays the registration page
     */
    public function actionRegistration()
    {
        $model = new RegistrationForm;

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'registration-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['RegistrationForm']))
        {
            $model->attributes = $_POST['RegistrationForm'];
            if ($model->validate() && $model->register())
                $this->redirect('../user/profile');
        }
        $this->render('registration', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionBlank($id)
    {
        $event = Event::model()->findByPk($id);

        if (Yii::app()->request->isAjaxRequest)
        {
            $data = Yii::app()->request->getParam('data');

            $reg = new Reg;
            $reg->user_id = Yii::app()->user->getId();
            $reg->event_id = $event->id;
            try
            {
                if (!$reg->save())
                    throw new CHttpException(500, 'Internal server error.');

                foreach ($data as $key => $value) {
                    $param_value = new ParamValue;
                    $param_value->param_id = $value["id"];
                    $param_value->reg_id = $reg->id;
                    $param_value->value = $value["value"];
                    if (!$param_value->save())
                        // @todo Откат всех инсертов.
                        throw new CHttpException(500, 'Internal server error.');
                }
                echo CJSON::encode(array('code' => 200));
                Yii::app()->end();
            }
            catch (CDbException $error)
            {
                throw new CHttpException(400, 'You are already registered for this event.');
            }
        }

        $reg = Reg::model()->findByAttributes(array('user_id' => Yii::app()->user->getId(), 'event_id' => $id));
        if ($reg !== null)
        {
            $this->redirect(array('user/blank', 'userId' => Yii::app()->user->getId(), 'eventId' => $id));
            Yii::app()->end();
        }

        $this->render('blank', array('event' => $event));
    }
}
