<?php

namespace yii2lab\geo\domain\interfaces\repositories;

/**
 * Interface CurrencyTransferInterface
 * 
 * @package yii2lab\geo\domain\interfaces\repositories
 * 
 * @property-read \yii2lab\geo\domain\interfaces\repositories\PhoneInterface $phone
 */
interface CurrencyTransferInterface {
	
	/**
	 * @return CurrencyValueEntity[]
	 */
	public function all();
	
}
