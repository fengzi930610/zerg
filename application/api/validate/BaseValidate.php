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
}