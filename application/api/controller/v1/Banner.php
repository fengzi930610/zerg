<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 14:55
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBanner($id){

        (new IDMustBePostiveInt())->goCheck();

        try{
            $banner = BannerModel::getBannerById($id);
        }catch(Exception $re){
            $array = [
                'errot_code' => 10001,
                'msg' => $re->getMessage()
            ];
            return json($array,400);
        }
        return $banner;

    }
























}