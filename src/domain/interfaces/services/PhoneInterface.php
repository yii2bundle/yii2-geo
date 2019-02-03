<?php

namespace yii2lab\geo\domain\interfaces\services;

use yii2rails\domain\data\Query;
use yii2rails\domain\interfaces\services\CrudInterface;
use yii2lab\geo\domain\entities\PhoneEntity;
use yii2lab\geo\domain\entities\PhoneInfoEntity;

/**
 * Interface PhoneInterface
 * 
 * @package yii2lab\geo\domain\interfaces\services
 * 
 * @property-read \yii2lab\geo\domain\Domain $domain
 * @property-read \yii2lab\geo\domain\interfaces\repositories\PhoneInterface $repository
 */
interface PhoneInterface extends CrudInterface {
	
	public function oneByPhone(string $phone, Query $query = null) : PhoneEntity;
	
	/**
	 * @param string $phone
	 *
	 * @return PhoneInfoEntity
	 */
	public function parse(string $phone);
	public function format(string $phone);
	public function isValid(string $phone);
}
