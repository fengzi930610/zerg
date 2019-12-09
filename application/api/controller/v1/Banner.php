<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 14:55
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use app\lib\exception\ParameterException;

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

        $banner = BannerModel::get($id);
//        $banner = BannerModel::getBannerById($id);

        if(!$banner){
            throw new BannerMissException([

            ]);
        }
        return $banner;

    }
























}