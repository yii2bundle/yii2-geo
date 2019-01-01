<?php

namespace yii2lab\geo\domain;

use yii2lab\domain\enums\Driver;

/**
 * Class Domain
 * 
 * @package yii2lab\geo\domain
 * @property \yii2lab\geo\domain\services\RegionService $region
 * @property \yii2lab\geo\domain\services\CityService $city
 * @property \yii2lab\geo\domain\services\CountryService $country
 * @property \yii2lab\geo\domain\services\CurrencyService $currency
 * @property-read \yii2lab\geo\domain\interfaces\services\PhoneInterface $phone
 * @property-read \yii2lab\geo\domain\interfaces\repositories\RepositoriesInterface $repositories
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'region' => Driver::slave(),
				'city' => Driver::slave(),
				'country' => Driver::slave(),
				'currency' => Driver::slave(),
				'phone' => Driver::FILEDB,
			],
			'services' => [
				'region',
				'city',
				'country',
				'currency',
				'phone',
			],
		];
	}
	
}