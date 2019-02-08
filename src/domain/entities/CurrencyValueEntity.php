<?php

namespace yii2lab\geo\domain\entities;

use yii2rails\domain\BaseEntity;
use yii2rails\domain\values\TimeValue;

/**
 * Class CurrencyValueEntity
 *
 * @package yii2lab\geo\domain\entities
 *
 * @property $code
 * @property $value
 * @property $publicated_at
 *
 */
class CurrencyValueEntity extends BaseEntity {

    protected $code;
	protected $value;
	protected $publicated_at;
	
	public function fieldType() {
		return [
			'code' => 'string',
			'value' => 'float',
			'publicated_at' => TimeValue::class,
		];
	}
	
}