<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use backend\models\Gallereya;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use backend\models\GallereyaSearch;

/**
 * GallereyaController implements the CRUD actions for Gallereya model.
 */
class GallereyaController extends Controller
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
                        'actions' => ['logout', 'index', 'create', 'update', 'view', 'delete'],
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
     * Lists all Gallereya models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GallereyaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallereya model.
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
     * Creates a new Gallereya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Gallereya();
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/gallery/photo_'.time().''.uniqid();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                if(empty($model->photo) || $model->photo == null){
                    $model->photo= UploadedFile::getInstance($model, 'photo');
                    if(!empty($model->photo))
                    {
                        $model->photo->saveAs($path.$name.'.'.$model->photo->extension);
                        $model->photo = $path.$name.'.'.$model->photo->extension;
                        $model->save();
                    }
                    else {
                        $model->photo = null;
                        $model->save();
                    }
                }
                $str = $model->name_uz;
                $match = preg_replace("#\W#", "", $str);
                $model->link = strtolower($match).time();
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
     * Updates an existing Gallereya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/gallery/photo_'.time().''.uniqid();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            if(empty($model->photo) || $model->photo == null){
                $model->photo= UploadedFile::getInstance($model, 'photo');
                if(!empty($model->photo))
                {
                    $model->photo->saveAs($path.$name.'.'.$model->photo->extension);
                    $model->photo = $path.$name.'.'.$model->photo->extension;
                    $model->save();
                }
                else {
                    $model->photo = null;
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
     * Deletes an existing Gallereya model.
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

    /**
     * Finds the Gallereya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Gallereya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallereya::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
