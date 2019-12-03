<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 15:50
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' =>'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule='', $data='', $field=''){
        if(is_numeric($value) && is_int(($value +0)) && ($value +0)>0 ){
            return true;
        }else{
            return $field.'必须为正整数';
        }
    }
}