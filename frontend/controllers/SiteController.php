<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Menu;
use yii\data\Pagination;
use backend\models\Links;
use backend\models\Pages;
use backend\models\Video;
use backend\models\Filial;
use frontend\models\Contact;
use backend\models\SubMenu;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use backend\models\Gallereya;
use backend\models\MultiMenu;
use backend\models\OtherPage;
use yii\filters\AccessControl;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\VerifyEmailForm;
use yii\web\BadRequestHttpException;
use frontend\models\ResetPasswordForm;
use yii\base\InvalidArgumentException;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;

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
                        'actions' => ['signup'],
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
        $filial = Filial::find()->orderBy(['id' => SORT_DESC])->limit(6)->all();
        $news = Pages::find()->where(['sub_menu_id' => '5'])->orderBy(['created_at' => SORT_DESC])->limit(6)->all();
        $link = Links::find()->all();
        return $this->render('index', [
            'filial' => $filial,
            'news' => $news,
            'links' => $link,
        ]);
    }

    public function actionPages($link) {
        $menu = Menu::find()->where(['link' => $link])->all();
        $submenu = SubMenu::find()->where(['link' => $link])->all();
        if(count($menu) > 0) {
            foreach($menu as $menu){}
            $title = Menu::find()->where(['link' => $link])->all();
            $model = Pages::find()->where(['menu_id' => $menu->id])->all();
            foreach($model as $model){}
            if($model->type == '1') {
                return $this->render('default', [
                    'title' => $title,
                    'model' => $model,
                ]);
            }
            if($model->type == '2') {
                $query = Pages::find()->where(['menu_id' => $menu->id])->andWhere(['link_page_id' => null]);
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>6, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
                $key=$query->offset($pages->offset)->limit($pages->limit)->all();
                return $this->render('blog', [
                    'title' => $title,
                    'key' => $key,
                    'pages' => $pages,
                ]);
            }
            if($model->type == '3') {
                return $this->render('link', [
                    'title' => $title,
                ]);
            }
            else {
                return $this->render('refresh', [
                    'title' => $title,
                ]);
            }
        }
        else {
            foreach($submenu as $submenu){}
            $title = SubMenu::find()->where(['link' => $link])->all();
            $models = Pages::find()->where(['sub_menu_id' => $submenu->id])->andWhere(['link_page_id' => null])->all();
            foreach($models as $model){$id = $model->id;}
            if(count($models) > 0) {
                $model = Pages::findOne($id);
                $model->updateCounters(array('view'=>1));
                if($model->type == '1') {
                    return $this->render('default', [
                        'title' => $title,
                        'model' => $model,
                    ]);
                }
            }
            
            if($model->type == '2') {
                $query = Pages::find()->where(['sub_menu_id' => $submenu->id])->andWhere(['link_page_id' => null]);
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>6, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
                $key=$query->offset($pages->offset)->limit($pages->limit)->all();
                return $this->render('blog', [
                    'title' => $title,
                    'key' => $key,
                    'pages' => $pages,
                ]);
            }
            if($model->type == '3') {
                $key = Pages::find()->where(['sub_menu_id' => $submenu->id])->andWhere(['type' => '3'])->all();
                return $this->render('link', [
                    'title' => $title,
                    'key' => $key,
                ]);
            }
            else {
                return $this->render('refresh', [
                    'title' => $title,
                ]);
            }
        }
    }

    public function actionMultipage($link) {
        $title = MultiMenu::find()->where(['link' => $link])->all();
        foreach($title as $t_key) {}
        $pages = Pages::find()->where(['multi_menu' => $t_key->id])->all();
        foreach($pages as $p_key){}
        return $this->render('multipage', [
            'title' => $title,
            'pages' => $pages,
            'p_key' => $p_key,
        ]);
    }

    public function actionLinkpage($link) {
        $title = Pages::find()->where(['link' => $link])->all();
        $link = Pages::find()->where(['link' => $link])->all();
        foreach($link as $link){}
        $key = Pages::find()->where(['link_page_id' => $link->id])->all();
        return $this->render('linkpage', [
            'title' => $title,
            'key' => $key,
        ]);
    }

    public function actionView($link) {
        $key = Pages::find()->where(['link' => $link])->all();
        foreach($key as $key) {$id = $key->id;}
        $model = Pages::findOne($id);
        $model->updateCounters(array('view'=>1));
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionFilial() {
        $filial = Filial::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('filial', [
            'filial' => $filial,
        ]);
    }

    public function actionGallery() {
        $gallery = Gallereya::find()->where(['type' => '1'])->orderBy(['id' => SORT_DESC])->all();
        return $this->render('gallery', [
            'gallery' => $gallery,
        ]);
    }

    public function actionGalleryview($link) {
        $gallery = Gallereya::find()->where(['link' => $link])->all();
        $title = Gallereya::find()->where(['link' => $link])->all();
        foreach($gallery as $gallery){}
        $model = Gallereya::find()->where(['type' => '2'])->andWhere(['gallery_id' => $gallery->id])->all();
        return $this->render('galleryview', [
            'model' => $model,
            'title' => $title,
        ]);
    }

    public function actionVideo() {
        $video = Video::find()->all();
        return $this->render('video', [
            'video' => $video,
        ]);
    }

    public function actionRahbariyat() {
        $model = OtherPage::find()->where(['type' => 1])->all();
        return $this->render('rahbariyat', [
            'model' => $model,
        ]);
    }

    public function actionBolimlar() {
        $model = OtherPage::find()->where(['type' => 2])->all();
        return $this->render('bolimlar', [
            'model' => $model,
        ]);
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
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
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
        $model = new Contact();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', "Murojaatingiz yuborildi!"));
            }
            else {
                Yii::$app->session->setFlash('error', Yii::t('app', "Murojaatingiz yuborilmadi! Qaytadan yuboring."));
            }
            return $this->refresh();
        } 

        return $this->render('contact', [
            'model' => $model,
        ]);
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
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
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
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
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
        } catch (InvalidArgumentException $e) {
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

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
