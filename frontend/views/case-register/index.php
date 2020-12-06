<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CaseRegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Case Registers';
$this->params['breadcrumbs'][] = ['label' => 'Case Register', 'url' => 'index'];
?>
<div class="case-register-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Case Register', ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a('<i class="fa fa-sync"></i> Sync Data', ['#'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'accused_name',
           // 'accussed_idno',
            'complainant_name',
            'court',
            //'representing_lawyer',
            //'created_at:datetime',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [

                    'view' => function( $url )
                    {
                        return Html::a('<i class="fa fa-eye"></i>', $url,[]);
                    },

                    'update' => function( $url )
                    {
                        return Html::a('<i class="fa fa-edit"></i>', $url,[]);
                    },

                    'delete' => function( $url )
                    {
                        return Html::a('<i class="fa fa-trash"></i>', $url,[

                            'data' => [
                                'confirm' => 'Are you sure you wanna delete this record ?',
                                'method' => 'POST',
                                'params' => [
                                    '_csrf-frontend' => Yii::$app->request->csrfToken
                                ]

                            ]
                        ]);
                    }

                ],
            ],
        ],
    ]); ?>


</div>
