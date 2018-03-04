<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\widgets\ActiveForm;
use common\models\UserProfile;
use common\models\User;
use common\models\PatientDetails;
use common\models\PatientRecords;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup','themetest'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('theme');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            echo json_encode(ActiveForm::validate($model));
            \Yii::$app->end();
        } elseif ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            // return $this->redirect([$url]);
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLoginAjax()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            echo json_encode(ActiveForm::validate($model));
            \Yii::$app->end();
        }elseif ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        // return $this->render('signup', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Get profile information.
     *
     * @return mixed
     */
    public function actionGetProfileInformation()
    {
        $model = new UserProfile();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            echo json_encode(ActiveForm::validate($model));
            \Yii::$app->end();
        }elseif ($model->load(Yii::$app->request->post())) {
                $model->user_id = Yii::$app->user->id;
                $model->save();
                return $this->goHome();
        }

        // return $this->render('signup', [
        //     'model' => $model,
        // ]);
    }

    public function actionPatientProfile(){

        $user = Yii::$app->user;

        if(empty($user)){
            return $this->redirect(['index']);
        }

        if($user->identity->type != User::TYPE_PATIENT){
            return $this->redirect(['index']);
        }

        $healthRecords  = PatientDetails::find()->where(['user_id' => $user->id])->all();
        $patientRecords = PatientRecords::find()->all(); 

        return  $this->render("patient_profile",[
            'healthRecords'  => $healthRecords,
            'patientRecords' => $patientRecords
        ]);
    }

    public function actionSetPatientDetails(){

        $model = new PatientDetails();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            echo json_encode(ActiveForm::validate($model));
            \Yii::$app->end();
        }elseif ($model->load(Yii::$app->request->post())) {
                
                $model->user_id = Yii::$app->user->id;
                $model->save();

                return $this->redirect(['site/patient-profile#health?tab=1']);
        }
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionThemetest(){
        return $this->render('theme');
    }
}
