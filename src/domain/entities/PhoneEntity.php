<?php

namespace yii2lab\geo\domain\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class PhoneEntity
 * 
 * @package yii2lab\geo\domain\entities
 * 
 * @property $id
 * @property $country_id
 * @property $mask
 * @property $rule
 * @property CountryEntity $country
 */
class PhoneEntity extends BaseEntity {

	protected $id;
	protected $country_id;
	protected $mask;
	protected $rule;
	protected $country;
	
	public function fieldType() {
		return [
			'id' => 'integer',
			'country_id' => 'integer',
			'country' => CountryEntity::class,
		];
	}
}
