<?php

use yii\helpers\ArrayHelper;
use yii2lab\test\helpers\TestHelper;

$config = [
	'geo' => 'yii2lab\geo\domain\Domain',
];

$baseConfig = TestHelper::loadConfig('common/config/domains.php');
return ArrayHelper::merge($baseConfig, $config);
