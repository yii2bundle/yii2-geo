<?php

namespace yii2lab\geo\domain\repositories\schema;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;

class CountrySchema extends BaseSchema {
	
	public function uniqueFields() {
		return [
			['name'],
		];
	}
	
	public function relations() {
		return [
			'currency' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'geo.currency',
					'field' => 'country_id',
				],
			],
			'phone' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'geo.phone',
					'field' => 'country_id',
				],
			],
		];
	}
	
}
