<?php

namespace yii2lab\geo\domain\repositories\schema;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;

class CitySchema extends BaseSchema {
	
	public function uniqueFields() {
		return [
			['name'],
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
			'region' => [
				'type' => RelationEnum::ONE,
				'field' => 'region_id',
				'foreign' => [
					'id' => 'geo.region',
					'field' => 'id',
				],
			],
		];
	}
	
}
