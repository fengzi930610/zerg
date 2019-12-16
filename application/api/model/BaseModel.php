<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    //

    protected function prefixImgUrl( $value, $data){//自动调取读取器
        if($data['from']===1)
            return config('setting.img_prefix').$value;
        return $value;
    }
}
