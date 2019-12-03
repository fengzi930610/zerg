<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 17:47
 */

namespace app\api\model;


use think\Exception;

class Banner
{
    public static function getBannerById($id){
        //TODO:根据Banner ID号 获取banner信息
        try{
            1/0;
        }catch (Exception $re){
            //TODO: 可以记录日志
            throw $re;
        }
        return 'this is banner info';
    }
}