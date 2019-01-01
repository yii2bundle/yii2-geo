<?php

namespace yii2lab\geo\api\controllers;

use yii2lab\geo\domain\enums\GeoPermissionEnum;
use yii2lab\rest\domain\rest\ActiveControllerWithQuery as Controller;
use yii2lab\extension\web\helpers\Behavior;

class RegionController extends Controller
{
	
	public $service = 'geo.region';

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'authenticator' => Behavior::auth(['create', 'update', 'delete']),
			'access' => Behavior::access(GeoPermissionEnum::REGION_MANAGE, ['create', 'update', 'delete']),
			'cors' => Behavior::cors(),
		];
	}
	
}
