<?php

namespace backend\controllers;

use Yii;
use app\models\Talent;
use app\models\TalentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TalentController implements the CRUD actions for Talent model.
 */
class TalentController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Talent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TalentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Talent model.
     * @param integer $id
     * @param integer $MANAGER_id
     * @return mixed
     */
    public function actionView($id, $MANAGER_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $MANAGER_id),
        ]);
    }

    /**
     * Creates a new Talent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Talent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'MANAGER_id' => $model->MANAGER_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Talent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $MANAGER_id
     * @return mixed
     */
    public function actionUpdate($id, $MANAGER_id)
    {
        $model = $this->findModel($id, $MANAGER_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'MANAGER_id' => $model->MANAGER_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Talent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $MANAGER_id
     * @return mixed
     */
    public function actionDelete($id, $MANAGER_id)
    {
        $this->findModel($id, $MANAGER_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Talent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $MANAGER_id
     * @return Talent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $MANAGER_id)
    {
        if (($model = Talent::findOne(['id' => $id, 'MANAGER_id' => $MANAGER_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
