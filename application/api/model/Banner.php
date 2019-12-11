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
    public function items(){
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id){
        $result = self::with([ 'items', 'items.image'])->find($id);//TODO: :: 为模型静态调用方法, with('items')为关联模型方法
        return $result;
    }
}