<?php

namespace yii2lab\geo\domain\repositories\schema;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;

class RegionSchema extends BaseSchema {
	
	public function uniqueFields() {
		return [
			['name'],
		];
	}
	
	public function relations() {
		return [
			'cities' => [
				'type' => RelationEnum::MANY,
				'field' => 'id',
				'foreign' => [
					'id' => 'geo.city',
					'field' => 'region_id',
				],
			],
			'country' => [
				'type' => RelationEnum::ONE,
				'field' => 'country_id',
				'foreign' => [
					'id' => 'geo.country',
					//'field' => 'id',
				],
			],
		];
	}
	
}
