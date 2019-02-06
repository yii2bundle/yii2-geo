<?php

namespace yii2lab\geo\domain\validators;

use App;
use yii\base\InvalidArgumentException;
use yii\validators\Validator;
use yii2lab\geo\domain\helpers\PhoneHelper;

class PhoneValidator extends Validator  {
	
	public function validateAttribute($model, $attribute) {
        $model->$attribute = PhoneHelper::clean($model->$attribute);
		try {
			App::$domain->geo->phone->validate($model->$attribute);
		} catch(InvalidArgumentException $e) {
			$this->addError($model, $attribute, $e->getMessage());
		}
	}
}
