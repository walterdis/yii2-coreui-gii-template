<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<?= "<?php " ?>$form = ActiveForm::begin(); ?>

<div class="card-body <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo '<div class="row">'.PHP_EOL;
        echo '  <div class="col-sm-12">'.PHP_EOL;
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n";
        echo '  </div>'.PHP_EOL;
        echo '</div>'.PHP_EOL.PHP_EOL;
    }
} ?>
    <div class="card-footer">
        <?= "<?= " ?>Html::submitButton('<i class="far fa-dot-circle"></i> ' . <?= $generator->generateString('Salvar') ?>, ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?= "<?php " ?>ActiveForm::end(); ?>
