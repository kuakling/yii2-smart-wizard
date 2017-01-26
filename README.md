# yii2-smart-wizard

## Basic
~~~
<?php

echo Step::widget([
    'widgetOptions' => [
        'theme' => 'default',
        'showStepURLhash' => false,
        'autoAdjustHeight' => false,
    ],
    'items' => [
        1 => [
            'icon' => 'fa fa-user,
            'label' => 'Step - 1',
            'content' => 'Content 1'
        ],
        2 => [
            'icon' => 'fa fa-check',
            'label' => 'Step - 2',
            'content' => '<h2>Content 2 </h2>'
        ],
    ],
]);
