<?php

namespace yii2lab\geo\api\controllers;

use yii2lab\geo\domain\enums\GeoPermissionEnum;
use yii2lab\rest\domain\rest\ActiveControllerWithQuery as Controller;
use yii2lab\extension\web\helpers\Behavior;

class CityController extends Controller
{
	
	public $service = 'geo.city';

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
            'cors' => Behavior::cors(),
		    'authenticator' => Behavior::auth(['create', 'update', 'delete']),
            'access' => Behavior::access(GeoPermissionEnum::CITY_MANAGE, ['create', 'update', 'delete']),
		];
	}
	
}
