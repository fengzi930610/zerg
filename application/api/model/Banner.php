<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 17:47
 */

namespace app\api\model;


class Banner extends BaseModel
{
    public function items(){
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id){
        //TODO: :: 为模型静态调用方法, with('items')为关联模型方法
        $result = self::with([ 'items', 'items.image'])->find($id);

        return $result;
    }
}