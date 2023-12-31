<?php
/* @var $this yii\web\View */
/** @var \yii\data\ActiveDataProvider $provider */

use yii\helpers\Html;
use yii\helpers\Url;
\app\assets\SiteAsset::register($this);

$this->title = 'Список связей для фотогалерей';
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?= $this->title; ?>
        </h1>
    </div>
</div>
<a href="<?= Url::to(['create']); ?>" class="btn btn-default">Добавить</a>
<div class="row">
        <div class="col-lg-12">
            <?= \yii\grid\GridView::widget([
                'dataProvider' => $provider,
                'columns' => [
                    'name',
                    'source_table_name',
                    'source_table_field',
                    'source_table_field_file',
                    'destination_table_name',
                    'destination_table_field',
                    [
                        'label' => '',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a('Редактировать', ['edit', 'id' => $data->id], ['class' => 'btn btn-info']) .
                            Html::a('Удалить', ['delete', 'id' => $data->id], ['class' => 'btn btn-danger', 'data-confirm' => 'Вы уверены?']);
                        }
                    ]
                ],
                'pager' => [
                    'firstPageLabel' => 'Первая',
                    'lastPageLabel' => 'Последняя'
                ],
            ]) ?>
        </div>
    </div>



