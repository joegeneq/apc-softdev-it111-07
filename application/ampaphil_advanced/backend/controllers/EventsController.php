<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
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
        'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index','_form','create','_search','update','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
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
     * @param integer $talent_id
     * @param integer $manager_id
     * @param integer $event_details_id
     * @param integer $client_id
     * @return mixed
     */
    public function actionView($id, $talent_id, $manager_id, $event_details_id, $client_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $talent_id, $manager_id, $event_details_id, $client_id),
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
            return $this->redirect(['view', 'id' => $model->id, 'talent_id' => $model->talent_id, 'manager_id' => $model->manager_id, 'event_details_id' => $model->event_details_id, 'client_id' => $model->client_id]);
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
     * @param integer $talent_id
     * @param integer $manager_id
     * @param integer $event_details_id
     * @param integer $client_id
     * @return mixed
     */
    public function actionUpdate($id, $talent_id, $manager_id, $event_details_id, $client_id)
    {
        $model = $this->findModel($id, $talent_id, $manager_id, $event_details_id, $client_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'talent_id' => $model->talent_id, 'manager_id' => $model->manager_id, 'event_details_id' => $model->event_details_id, 'client_id' => $model->client_id]);
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
     * @param integer $talent_id
     * @param integer $manager_id
     * @param integer $event_details_id
     * @param integer $client_id
     * @return mixed
     */
    public function actionDelete($id, $talent_id, $manager_id, $event_details_id, $client_id)
    {
        $this->findModel($id, $talent_id, $manager_id, $event_details_id, $client_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Events model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $talent_id
     * @param integer $manager_id
     * @param integer $event_details_id
     * @param integer $client_id
     * @return Events the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $talent_id, $manager_id, $event_details_id, $client_id)
    {
        if (($model = Events::findOne(['id' => $id, 'talent_id' => $talent_id, 'manager_id' => $manager_id, 'event_details_id' => $event_details_id, 'client_id' => $client_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
