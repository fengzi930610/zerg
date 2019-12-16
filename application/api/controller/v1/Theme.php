<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/14
 * Time: 20:47
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;

class Theme
{
    /**
     *
     * @url /theme?ids=id1,id2,id3,...
     * @return 一组theme模型
     */
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();
        return "success";
    }
}