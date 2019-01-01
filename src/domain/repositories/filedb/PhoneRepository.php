<?php

namespace yii2lab\geo\domain\repositories\filedb;

use yii2lab\extension\filedb\repositories\base\BaseActiveFiledbRepository;
use yii2lab\geo\domain\interfaces\repositories\PhoneInterface;

/**
 * Class PhoneRepository
 * 
 * @package yii2lab\geo\domain\repositories\filedb
 * 
 * @property-read \yii2lab\geo\domain\Domain $domain
 */
class PhoneRepository extends BaseActiveFiledbRepository implements PhoneInterface {

	protected $schemaClass = true;

}
