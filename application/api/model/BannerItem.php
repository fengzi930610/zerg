<?php

namespace app\api\model;

use think\Model;

class BannerItem extends Model
{
    protected $hidden = ['id', 'delete_time', 'update_time', 'img_id'];
    //
    public function image(){
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}
