<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this pmsc\yii2\core\base\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Novo ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">
    <div class="card-header">
        <i class="far fa-folder"></i> <?= "<?= " ?>Html::encode($this->title) ?>
    </div>

    <?= "<?= " ?>$this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
