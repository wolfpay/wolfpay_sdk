<?php
//引入支付核心类库
include './Pay.class.php';

//引入配置文件
include './config.php';

//实例化支付类
$pay = new Pay($pid, $key, $api);

//支付方式(all:全接口,alipay:支付宝,qqpay:QQ钱包,wxpay:微信支付)
$type = 'all';

//订单号
$out_trade_no = time();

//异步通知地址
$notify_url = 'https://' . $_SERVER['HTTP_HOST'] . '/notify.php';

//回调通知地址
$return_url = 'https://' . $_SERVER['HTTP_HOST'] . '/return.php';

//商品名称
$name = '测试商品';

//支付金额（保留小数点后两位）
$money = '0.01';

//站点名称
$sitename = '测试支付';

//QRAPI
$qr='no';

//发起支付
$url = $pay->submit($type, $out_trade_no, $notify_url, $return_url, $name, $money, $sitename,$qr);

//输出表单
echo "<script>window.location.href='{$url}';</script>";
