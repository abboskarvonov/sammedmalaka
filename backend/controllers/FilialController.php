<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\web\UploadedFile;
use backend\models\Filial;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\FilialSearch;
use yii\web\NotFoundHttpException;

/**
 * FilialController implements the CRUD actions for Filial model.
 */
class FilialController extends Controller
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
     * Lists all Filial models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FilialSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Filial model.
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
     * Creates a new Filial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Filial();
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/filial/filial_'.time().''.uniqid();
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
     * Updates an existing Filial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $name = uniqid().''.time();
        $path = '../../frontend/web/img/filial/filial_'.time().''.uniqid();
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
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Filial model.
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
     * Finds the Filial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Filial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Filial::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
