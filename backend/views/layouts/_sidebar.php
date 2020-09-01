<?php 
use yii\bootstrap4\Nav;

echo "<aside class='shadow'>";
echo Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills',
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['/site/index'],
        ],
        [
            'label' => 'Videos',
            'url' => ['/video/index'],
        ]
    ]
]);
echo "</aside>";
?>