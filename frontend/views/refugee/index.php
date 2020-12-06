<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RefugeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Refugees';
$this->params['breadcrumbs'][] = ['label' => 'Refugees List', 'url' => 'index'];
?>
<div class="refugee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Refugee', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-sync"></i> Sync Data', ['#'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            'middle_name',
            'last_name',
            //'user_group_id',
            //'user_id',
            //'image',
            [
                    'attribute' => 'camp',
                    'value' => 'rcamp.name',
            ],
            //'cell_number',
            //'email_address:email',
            [
                    'attribute' => 'gender',
                    'value' => 'rgender.gender'
            ],
            [
                    'attribute' => 'country_of_origin',
                    'value' => 'rcountry.country'
            ],
           [
                'attribute' => 'demography_id',
                'value' => 'rdemography.demography',
           ],

            //'date_of_birth',
            //'id_type',
            //'conflict',
            //'created_at',
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
