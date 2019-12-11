<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    //
    protected $hidden = ['id', 'delete_time', 'update_time'];
    public function getUrlAttr( $value){//自动调取读取器
        return config('setting.img_prefix').$value;
    }

}
