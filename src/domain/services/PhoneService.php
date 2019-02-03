<?php

namespace yii2lab\geo\domain\services;

use yii\web\NotFoundHttpException;
use yii2rails\domain\data\Query;
use yii2lab\geo\domain\entities\PhoneEntity;
use yii2lab\geo\domain\helpers\PhoneHelper;
use yii2lab\geo\domain\interfaces\services\PhoneInterface;
use yii2rails\domain\services\base\BaseActiveService;

/**
 * Class PhoneService
 * 
 * @package yii2lab\geo\domain\services
 * 
 * @property-read \yii2lab\geo\domain\Domain $domain
 * @property-read \yii2lab\geo\domain\interfaces\repositories\PhoneInterface $repository
 */
class PhoneService extends BaseActiveService implements PhoneInterface {

	public function oneByPhone(string $phone, Query $query = null) : PhoneEntity {
		/** @var PhoneEntity[] $collection */
		$collection = $this->all($query);
		foreach($collection as $phoneEntity) {
			$isMatch = PhoneHelper::matchPhone($phone, $phoneEntity->rule);
			if($isMatch) {
				return $phoneEntity;
			}
		}
		throw new NotFoundHttpException;
	}
	
	public function parse(string $phone) {
		$phoneEntity = $this->oneByPhone($phone);
		$phoneInfoEntity = PhoneHelper::matchPhone($phone, $phoneEntity->rule);
		return $phoneInfoEntity;
	}
	
	public function format(string $phone) {
		$phoneEntity = $this->oneByPhone($phone);
		return PhoneHelper::formatByMask($phone, $phoneEntity->mask);
	}
	
	public function isValid(string $phone) {
		try {
			$this->oneByPhone($phone);
			return true;
		} catch(NotFoundHttpException $e) {
			return false;
		}
	}
}
