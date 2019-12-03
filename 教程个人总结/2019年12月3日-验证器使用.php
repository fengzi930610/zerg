<?php
/**
 * Created by PhpStorm.
 * User: staff002
 * Date: 2019/12/3
 * Time: 15:32
 */

//2019-12-3 15:33:26 独立验证样式
$data = [
    'name' => 'vendorssssss',
    'email' => 'verdorqq.com'
];

$validate = new Validate([
    'name' => 'require|max:10',
    'email' => 'email'
]);

$result = $validate->batch()->check($data);//批量验证batch;

//===========================================================


