<?php
//引入支付核心类库
include './Pay.class.php';

//引入配置文件
include './config.php';

//实例化支付类
$pay = new Pay($pid, $key, $api);

//退款訂單號
$trade_no='';

//发起退款
$url = $pay->refund($trade_no);

//输出表单
echo "<script>window.location.href='{$url}';</script>";
