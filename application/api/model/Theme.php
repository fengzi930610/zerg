<?php

namespace app\api\model;

class Theme extends BaseModel
{
    //一对一关联
    public function toppic(){
        return $this->belongsTo('Image', 'topic_img_id', 'id');//参数2为当前数据模型的外键 ，参数3为关联的数据表的主键
    }

    public function headImg(){
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
}
