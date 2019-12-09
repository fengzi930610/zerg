<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 17:47
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public static function getBannerById($id){
        //TODO:根据Banner ID号 获取banner信息
        $result = Db::table('banner')
            ->where(function ($query) use ($id){
                $query->where('id', '=', $id);
            })
            ->find();
        return $result;
    }
}