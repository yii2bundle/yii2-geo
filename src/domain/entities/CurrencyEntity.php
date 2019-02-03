<?php

namespace yii2lab\geo\domain\entities;

use yii2rails\domain\BaseEntity;

class CurrencyEntity extends BaseEntity {

    protected $id;
    protected $country_id;
    protected $code;
    protected $name;
    protected $description;
    protected $country;

    public function rules() {
        return [
            [['id', 'name', 'code', 'country_id'], 'required'],
            [['name', 'code'], 'trim'],
            [['name', 'code'], 'string', 'min' => 2],
            [['id', 'country_id'], 'integer'],
        ];
    }
	
	public function fieldType() {
		return [
			'id' => 'integer',
			'country_id' => 'integer',
			'country' => [
				'type' => CountryEntity::class,
			],
		];
	}
}