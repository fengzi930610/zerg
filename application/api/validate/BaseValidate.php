<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 16:22
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取传入参数
        //对参数作校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);//batch() 批量验证异常信息，返回值为对象数组
        if(!$result){
            throw new ParameterException([
                'msg' => $this->error,
                'code' => 999,
                'errorCode' => 123456
            ]);
        }else{
            return true;
        }
    }

    /**
     * 自定义验证id是否为正整数
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool|string
     */
    protected function isPositiveInteger($value, $rule='', $data='', $field=''){
        if(is_numeric($value) && is_int(($value +0)) && ($value +0)>0 ){
            return true;
        }else{
            return false;
        }
    }
}