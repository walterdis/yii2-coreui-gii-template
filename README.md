# yii2-coreui-gii-template
Simple Gii templates customized for CoreUi

# Usage

- **composer require walterdis/yii2-coreui-gii-template**

## Configure Gii Module
```
'generators' => [
    'crud' => [
        'class' => \yii\gii\generators\crud\Generator::class,
        'templates' => [//setting for out templates
            'walterdis-coreui-bs4-default' => '@vendor/walterdis/yii2-coreui-gii-template/src/templates/crud/bootstrap4',
            'walterdis-coreui-bs4-2-rows' => '@vendor/walterdis/yii2-coreui-gii-template/src/templates/crud/bootstrap4-2rows',
        ],
    
],
```

### Include Yii2GiiTemplatesAsset and register
```
use Walterdis\Yii2\Gii\assets\Yii2CoreuiGiiTemplateAsset;
```

Select the desired template in CRUD generation

Done ;)
