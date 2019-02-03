<?php

namespace yii2lab\geo\domain\repositories\schema;

use yii2rails\domain\enums\RelationEnum;
use yii2rails\domain\repositories\relations\BaseSchema;

class CurrencySchema extends BaseSchema {
	
	public function uniqueFields() {
		return [
			['code'],
		];
	}
	
	public function relations() {
		return [
			'country' => [
				'type' => RelationEnum::ONE,
				'field' => 'country_id',
				'foreign' => [
					'id' => 'geo.country',
					'field' => 'id',
				],
			],
		];
	}
	
}
