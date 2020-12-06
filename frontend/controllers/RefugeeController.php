<?php

namespace frontend\controllers;

use app\models\Counties;
use app\models\Country;
use app\models\Demographics;
use app\models\IdentificationType;
use app\models\RefugeeCamp;
use frontend\models\Conflict;
use frontend\models\Gender;
use Yii;
use app\models\Refugee;
use app\models\RefugeeSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RefugeeController implements the CRUD actions for Refugee model.
 */
class RefugeeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Refugee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RefugeeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Refugee model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Refugee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Refugee();
        $IdTypes = ArrayHelper::map(IdentificationType::find()->all(),'id','identification');
        $camps = ArrayHelper::map(RefugeeCamp::find()->all(),'id','name');
        $conflicts = ArrayHelper::map(Conflict::find()->all(),'id','conflict');
        $countries = ArrayHelper::map(Country::find()->all(),'id','country');
        $demographics = ArrayHelper::map(Demographics::find()->all(),'id','demography');
        $gender = ArrayHelper::map(Gender::find()->all(),'id','gender');




        if ($model->load(Yii::$app->request->post()) ) {

            $model->date_of_birth = date('Y-m-d H:i:s',strtotime(Yii::$app->request->post()['Refugee']['date_of_birth']));
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'IdTypes' =>  $IdTypes,
            'camps' => $camps ,
            'conflicts' => $conflicts,
            'countries' => $countries,
            'demographics' => $demographics,
            'gender' => $gender

        ]);
    }

    /**
     * Updates an existing Refugee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $IdTypes = ArrayHelper::map(IdentificationType::find()->all(),'id','identification');
        $camps = ArrayHelper::map(RefugeeCamp::find()->all(),'id','name');
        $conflicts = ArrayHelper::map(Conflict::find()->all(),'id','conflict');
        $countries = ArrayHelper::map(Country::find()->all(),'id','country');
        $demographics = ArrayHelper::map(Demographics::find()->all(),'id','demography');
        $gender = ArrayHelper::map(Gender::find()->all(),'id','gender');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'IdTypes' =>  $IdTypes,
            'camps' => $camps ,
            'conflicts' => $conflicts,
            'countries' => $countries,
            'demographics' => $demographics,
            'gender' => $gender
        ]);
    }

    /**
     * Deletes an existing Refugee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Refugee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Refugee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Refugee::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
