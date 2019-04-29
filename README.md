# yii2-gii-template
Gii templates

# Usage

## Configure Gii Module
`
'generators' => [
    'crud' => [
        'class' => \yii\gii\generators\crud\Generator::class,
        'templates' => [//setting for out templates
            'walterdis-coreui-bs4-default' => '@vendor/walterdis/yii2-gii-templates/src/templates/crud/bootstrap4',
            'walterdis-coreui-bs4-2-rows' => '@vendor/walterdis/yii2-gii-templates/src/templates/crud/bootstrap4-2rows',
        ],
    
],`

### Include Yii2GiiTemplatesAsset
`use Walterdis\Yii2\Gii\assets\Yii2GiiTemplates;
`

Select the desired template in CRUD generation;