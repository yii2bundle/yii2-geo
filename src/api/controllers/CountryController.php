<?php

namespace yii2lab\geo\api\controllers;

use yii2lab\geo\domain\enums\GeoPermissionEnum;
use yii2lab\rest\domain\rest\ActiveControllerWithQuery as Controller;
use yii2rails\extension\web\helpers\Behavior;

class CountryController extends Controller
{
	
	public $service = 'geo.country';

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'authenticator' => Behavior::auth(['create', 'update', 'delete']),
			'access' => Behavior::access(GeoPermissionEnum::COUNTRY_MANAGE, ['create', 'update', 'delete']),
			'cors' => Behavior::cors(),
		];
	}
	
}
