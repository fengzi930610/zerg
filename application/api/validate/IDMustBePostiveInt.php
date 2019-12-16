<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 15:50
 */

namespace app\api\validate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' =>'require|isPositiveInteger'
    ];
    protected $message = [
        'id.isPositiveInteger' => 'id必须为正整数'
    ];
}