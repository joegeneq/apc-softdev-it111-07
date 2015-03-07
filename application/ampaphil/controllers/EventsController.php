<?php

namespace app\controllers;

use Yii;
use app\models\Events;
use app\models\EventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventsController implements the CRUD actions for Events model.
 */
class EventsController extends Controller
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
     * Lists all Events models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Events model.
     * @param integer $id
     * @param integer $TALENT_id
     * @param integer $TALENT_MANAGER_id
     * @param integer $EVENTS_DETAILS_id
     * @param integer $CLIENT_id
     * @return mixed
     */
    public function actionView($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id),
        ]);
    }

    /**
     * Creates a new Events model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Events();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'TALENT_id' => $model->TALENT_id, 'TALENT_MANAGER_id' => $model->TALENT_MANAGER_id, 'EVENTS_DETAILS_id' => $model->EVENTS_DETAILS_id, 'CLIENT_id' => $model->CLIENT_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Events model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $TALENT_id
     * @param integer $TALENT_MANAGER_id
     * @param integer $EVENTS_DETAILS_id
     * @param integer $CLIENT_id
     * @return mixed
     */
    public function actionUpdate($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id)
    {
        $model = $this->findModel($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'TALENT_id' => $model->TALENT_id, 'TALENT_MANAGER_id' => $model->TALENT_MANAGER_id, 'EVENTS_DETAILS_id' => $model->EVENTS_DETAILS_id, 'CLIENT_id' => $model->CLIENT_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Events model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $TALENT_id
     * @param integer $TALENT_MANAGER_id
     * @param integer $EVENTS_DETAILS_id
     * @param integer $CLIENT_id
     * @return mixed
     */
    public function actionDelete($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id)
    {
        $this->findModel($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Events model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $TALENT_id
     * @param integer $TALENT_MANAGER_id
     * @param integer $EVENTS_DETAILS_id
     * @param integer $CLIENT_id
     * @return Events the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $TALENT_id, $TALENT_MANAGER_id, $EVENTS_DETAILS_id, $CLIENT_id)
    {
        if (($model = Events::findOne(['id' => $id, 'TALENT_id' => $TALENT_id, 'TALENT_MANAGER_id' => $TALENT_MANAGER_id, 'EVENTS_DETAILS_id' => $EVENTS_DETAILS_id, 'CLIENT_id' => $CLIENT_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
