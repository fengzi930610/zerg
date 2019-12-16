<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/14
 * Time: 21:15
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    //定义验证规则
    protected $rule=[
        'ids' => 'require|checkIDs'
    ];

    //定义验证信息
    protected $message = [
        'ids' => 'ids必须用“,”隔开的正整数'
    ];

    //自定义验证器，$value = id1,id2,...
    protected function checkIDs($value){
        $values = explode(',', $value);//转化为数组
        if(empty($values))
            return false;
        foreach ($values as $id){
            if(!$this->isPositiveInteger($id))//保证每一个id值都为正整数
                return false;
        }
        return true;
    }
}