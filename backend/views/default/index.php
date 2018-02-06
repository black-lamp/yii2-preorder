<?php

use yii\grid\GridView;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 * @var $dataProvider
 */
echo GridView::widget([
    'dataProvider' => $dataProvider,
]);
