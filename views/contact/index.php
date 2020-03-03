<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'People Texts';
?>
<div class="knowledge-base-index container">

    <br/>
    <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Text', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email_or_phone_number',
            [
                'attribute' => 'subject',
                'format' => 'raw',
                'value'=>function ($model) {
                    return Html::a($model->subject, ['view', 'id' => $model->id]);
                },
            ],
            'text:ntext',
            [
                'attribute' => 'sent_at',
                'format' => 'raw',
                'value'=>function ($model) {
                    return date('Y/m/d H:i:s' ,$model->sent_at);
                },
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
