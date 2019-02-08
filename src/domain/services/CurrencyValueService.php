<?php

namespace yii2lab\geo\domain\services;

use yii2rails\domain\data\Query;
use yii2rails\domain\services\base\BaseActiveService;

class CurrencyValueService extends BaseActiveService {
	
	public function all(Query $query = null) {
		$query = Query::forge($query);
		$query->andWhere(['publicated_at' => date('Y-m-d 00:00:00')]);
		$collection = parent::all($query);
		if(empty($collection)) {
			$collection = $this->domain->repositories->currencyTransfer->all();
			foreach($collection as $entity) {
				$this->repository->insert($entity);
			}
		}
		return $collection;
	}
	
}
