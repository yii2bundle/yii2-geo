<?php

namespace yii2lab\geo\domain\services;

use yii2lab\geo\domain\entities\CurrencyValueEntity;
use yii2rails\domain\data\Query;
use yii2rails\domain\services\base\BaseActiveService;
use yii2rails\domain\values\TimeValue;

class CurrencyValueService extends BaseActiveService {
	
	public function all(Query $query = null) {
		$query = Query::forge($query);
		$timeValue = new TimeValue;
		$timeValue->setFromFormat(date('Y-m-d 00:00:00'), TimeValue::FORMAT_WEB);
		//prr($timeValue->getInFormat(TimeValue::FORMAT_WEB),1,1);
		$query->andWhere(['publicated_at' => $timeValue->getInFormat(TimeValue::FORMAT_WEB)]);
		/** @var CurrencyValueEntity[] $collection */
		$collection = parent::all($query);
		if(empty($collection)) {
			$collection = $this->domain->repositories->currencyTransfer->all();
			foreach($collection as $entity) {
                $entity->publicated_at = $timeValue;
				$this->repository->insert($entity);
			}
		}
		return $collection;
	}
	
}
