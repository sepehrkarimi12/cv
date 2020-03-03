<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\knowledge_base\models\KnowledgeBase */

$this->title = $model->subject;
\yii\web\YiiAsset::register($this);
?>
<div class="knowledge-base-view container">

    <br/>
    <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('back', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'email_or_phone_number',
            'subject',
            'text:ntext',
            [
                'attribute' => 'sent_at',
                'format' => 'raw',
                'value'=>function ($model) {
                    return date('Y/m/d H:i:s' ,$model->sent_at);
                },
            ],
        ],
    ]) ?>

</div>
