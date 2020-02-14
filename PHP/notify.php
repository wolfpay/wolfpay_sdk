<?php
//引入支付核心类库
include './Pay.class.php';

//引入配置文件
include './config.php';

//实例化支付类
$pay = new Pay($pid, $key);

//接收异步通知数据
$data = $_GET;

//商户订单号
$out_trade_no = $data['out_trade_no'];

//验证签名
if ($pay->verify($data)) {
    //验证支付状态
    if ($data['trade_status'] == 'TRADE_SUCCESS') {
        echo 'success';
        //这里就可以放心的处理您的业务流程了
        //您可以通过上面的商户订单号进行业务流程处理
    }
} else {
    echo 'fail';
}
