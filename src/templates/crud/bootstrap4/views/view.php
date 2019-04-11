<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <div class="card-header">
        <i class="fa fa-eye"></i> <?= "<?= " ?>Html::encode($this->title) ?>

        <div class="card-header-actions">
            <span class="d-none d-md-inline d-lg-inline"> <!-- show on large devices -->
                <?= "<?= " ?>Html::a('<i class="fas fa-plus"> </i> Atualizar', ['update', <?= $urlParams ?>], ['class' => 'btn btn-primary btn-sm']) ?>
                <?= "<?= " ?>Html::a('<i class="fas fa-trash"> </i> Excluir', ['delete', <?= $urlParams ?>], [
                'class' => 'btn btn-danger btn-sm',
                'data' => [
                    'confirm' => <?= $generator->generateString('Are you sure you want to delete this item?') ?>,
                    'method' => 'post',
                ],
                ]) ?>
            </span>
            <span class="d-xl-none d-md-none"> <!-- show on non-large devices -->
                <?= "<?= \n" ?>
                Html::a('<i class="fas fa-edit"> </i>', ['update', <?= $urlParams ?>], [
                    'data-toggle' => 'tooltip',
                    'data-original-title' => 'Atualizar Registro',
                    'data-placement' => 'top'
                ])
                ?>
                <?= "<?= \n" ?>
                Html::a('<i class="fas fa-trash"> </i>', ['delete', <?= $urlParams ?>], [
                    'data-toggle' => 'tooltip',
                    'data-original-title' => 'Excluir Registro',
                    'data-placement' => 'top'
                ])
                ?>
            </span>
        </div>

    </div>

    <div class="card-body">


    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
        ],
    ]) ?>

    </div>
</div>