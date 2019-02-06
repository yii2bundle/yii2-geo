<?php

namespace tests\unit\validators;

use yii\base\Model;
use yii2lab\geo\domain\helpers\PhoneHelper;
use yii2lab\geo\domain\validators\PhoneValidator;
use yii2lab\test\Test\Unit;

class PhoneValidatorTest extends Unit {

    public function testSmall()
    {
        $model = new PhoneForm;
        $model->phone = '7777111';
        $model->validate();
        $this->tester->assertEquals([
            'phone' => [
                'Bad format',
            ],
        ], $model->errors);
    }

    public function test()
    {
        $model = new PhoneForm;
        $model->phone = '07771111111';
        $model->validate();
        $this->tester->assertEquals([
            'phone' => [
                'Bad format',
            ],
        ], $model->errors);
    }

    public function testPlus()
    {
        $model = new PhoneForm;
        $model->phone = '+77771111111';
        $model->validate();
        $this->tester->assertEquals([], $model->errors);
    }

    public function testBad()
    {
        $model = new PhoneForm;
        $model->phone = '+87771111111';
        $model->validate();
        $this->tester->assertEquals([
            'phone' => [
                'Bad format',
            ],
        ], $model->errors);
    }
}

class PhoneForm extends Model {

    public $phone;

    public function rules() {
        return [
            ['phone', PhoneValidator::class],
        ];
    }

}