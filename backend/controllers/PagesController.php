<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Pages;
use yii\web\UploadedFile;
use backend\models\SubMenu;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\PagesSearch;
use yii\web\NotFoundHttpException;

/**
 * PagesController implements the CRUD actions for Pages model.
 */
class PagesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'update', 'view', 'delete', 'submenu'],
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
     * Lists all Pages models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pages model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pages();
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/pages/page_'.time().''.uniqid();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                if(empty($model->img) || $model->img == null){
                    $model->img= UploadedFile::getInstance($model, 'img');
                    if(!empty($model->img))
                    {
                        $model->img->saveAs($path.$name.'.'.$model->img->extension);
                        $model->img = $path.$name.'.'.$model->img->extension;
                        $model->save();
                    }
                    else {
                        $model->img = null;
                        $model->save();
                    }
                }
                $str = $model->name_uz;
                $match = preg_replace("#\W#", "", $str);
                $model->link = strtolower($match).time();
                $model->view = '0';
                $model->created_at = date('Y-m-d H:i:s');
                $model->updated_at = date('Y-m-d H:i:s');
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/pages/page_'.time().''.uniqid();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            if(empty($model->img) || $model->img == null){
                $model->img= UploadedFile::getInstance($model, 'img');
                if(!empty($model->img))
                {
                    $model->img->saveAs($path.$name.'.'.$model->img->extension);
                    $model->img = $path.$name.'.'.$model->img->extension;
                    $model->save();
                }
                else {
                    $model->img = null;
                    $model->save();
                }
            }
            $str = $model->name_uz;
            $match = preg_replace("#\W#", "", $str);
            $model->link = strtolower($match).time();
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSubmenu($id)
    {
        $cities = SubMenu::find()->where(['menu_id'=>$id])->all();
        // return "<script>console.log('".count($cities)."')</script>";
        $count = count($cities);
        if ($count > 0) {
            echo "<option>".Yii::t('app','-Ichki menuni tanlang-')."</option>";
            foreach ( $cities as $city ) {
                echo "<option value='".$city->id."'>".$city->name_uz."</option>";
            }
        }
        else echo "<option selected disabled>".Yii::t('app','Ichki menu topilmadi')."</option>";
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pages::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
