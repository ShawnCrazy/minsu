<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2018/3/4
 * Time: 14:02
 */

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->config('config_alipay', TRUE);//alipay配置文件
    }

    function get_room()
    {
        echo '{}';
    }

    /*
     * 支付接口，返回付款链接
     * POST参数：json字符串，必选字段如下
     * out_trade_no：交易号，唯一
     * total_amount：价格，精确到小数点后2位
     * subject：交易物品
     * 参照文档：https://docs.open.alipay.com/api_1/alipay.trade.create/
     * **/
    function pay()
    {
        $this->load->library('alipay-sdk-PHP/aop/AopClient');
        $this->load->library('alipay-sdk-PHP/aop/request/AlipayTradePrecreateRequest');
        $this->load->library('alipay-sdk-PHP/aop/SignData');

        $aop = new AopClient ();
        $aop->gatewayUrl = $this->config->item('gatewayUrl', 'config_alipay');
        $aop->appId = $this->config->item('appId', 'config_alipay');;
        $aop->rsaPrivateKey = $this->config->item('rsaPrivateKey', 'config_alipay');
        $aop->alipayrsaPublicKey = $this->config->item('alipayrsaPublicKey', 'config_alipay');
        $aop->apiVersion = $this->config->item('apiVersion', 'config_alipay');;
        $aop->signType = $this->config->item('signType', 'config_alipay');;
        $aop->postCharset = $this->config->item('postCharset', 'config_alipay');;
        $aop->format = $this->config->item('format', 'config_alipay');;
        $request = new AlipayTradePrecreateRequest ();

        $bizContent = $this->input->get();
        if (!$bizContent || !array_key_exists("out_trade_no", $bizContent)
            || !array_key_exists("total_amount", $bizContent)
            || !array_key_exists("subject", $bizContent)) {
            echo "tutu_response{'code':'40004','msg':'缺失必要的字段'}";//后期封装
            return;
        }
        $request->setBizContent(json_encode($bizContent));
        $result = $aop->execute($request);

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;

        //以下为处理代码
        if (!empty($resultCode) && $resultCode == 10000) {
            echo "成功";
            var_dump($result->$responseNode->qr_code);
        } else {
            echo "失败";
        }
        $this->load->helper('phpqrcode/phpqrcode');
//        include 'phpqrcode/phpqrcode.php';
        QRcode::png($result->$responseNode->qr_code, false, 'L', '4');
    }
}