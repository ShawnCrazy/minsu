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
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('db_model');
        $this->load->config('config_alipay', TRUE);//alipay配置文件
    }

    /*
     * 获取房间信息接口
     * 表单参数必填用户ID，其余字段选填
     * **/
    public function get_room($cid = -1)
    {
        if ($cid == -1) {
            echo json_encode(array('code' => 400, 'content' => '用户数据错误'));
            return;
        }
        $content = '<thead>
                    <tr><th>序号</th><th>联系人</th><th>联系电话</th><th>价格（￥/天）</th><th>状态</th><th>操作</th></tr>
                    </thead>
                    <tbody>';
        $res = $this->db_model->get_table('room', array('owner_id' => $cid));
        if ($res) {
            $innerContent = '';
            foreach ($res as $item) {
                $innerContent .= '<tr>' .
                    '<td>' . $item['id'] . '</td>' .
                    '<td>' . $item['connect_name'] . '</td>' .
                    '<td>' . $item['connect_tel'] . '</td>' .
                    '<td>' . $item['price'] . '</td>' .
                    '<td>' . $item['state'] . '</td>' .
                    '<td><button class="btn-warning"><a href="#submit" data-toggle="tab">修改</a></button></td>>' .
                    '</tr>';
            }
            $content .= $innerContent . '</tbody>';
            echo json_encode(array('code' => 100, 'content' => $content));
        } else {
            echo json_encode(array('code' => 400, 'content' => $this->db_model->error()));
        }
    }

    /*
     * 获取订单信息接口
     * 表单参数必填用户id，其余字段选填
     * **/
    public function get_order($cid = -1)
    {
        if ($cid == -1) {
            echo json_encode(array('code' => 400, 'content' => '用户数据错误'));
            return;
        }
        $content = '<thead>
                    <tr><th>序号</th><th>房间号</th><th>开始时间</th><th>结束时间</th><th>状态</th></tr>
                    </thead>
                    <tbody>';
        $res = $this->db_model->get_table('orders', array('user_id' => $cid));
        if ($res) {
            $innerContent = '';
            foreach ($res as $item) {
                $innerContent .= '<tr>' .
                    '<td>' . $item['id'] . '</td>' .
                    '<td>' . $item['room_id'] . '</td>' .
                    '<td>' . $item['begin'] . '</td>' .
                    '<td>' . $item['end'] . '</td>' .
                    '<td>' . $item['state'] . '</td>' .
                    '</tr></tbody>';
            }
            $content .= $innerContent;
            echo json_encode(array('code' => 100, 'content' => $content));
        } else {
            echo json_encode(array('code' => 400, 'content' => $this->db_model->error()));
        }
    }

    /*
     * 用户信息获取接口、
     * 使用cookie进行查询
     * **/
    public function get_user()
    {
        $where = array("account" => get_cookie('uin'),
            "password" => get_cookie('key'));
        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) == 1) {
            echo json_encode(array('code' => 100, 'content' => $users[0]));
        } else {
            //容错处理，账号有重复的
            echo json_encode(array('code' => 400, 'content' => '请重新登陆') + $users);
        }
    }

    /*
     * 添加房间信息接口
     * **/
    public function submit_room()
    {
        $item = $this->get_input();
        $res = $this->db_model->insert_item('room', $item);
        if ($res) {
            echo json_encode(array('code' => 100));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * 发布公告接口
     * **/
    public function submit_brand()
    {
        $item = $this->get_input();
        $res = $this->db_model->insert_item('brand', $item);
        if ($res) {
            echo json_encode(array('code' => 100));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * 添加订单接口
     * **/
    public function submit_order()
    {
        $item = $this->get_input();
        $res = $this->db_model->insert_item('orders', $item);
        if ($res) {
            echo json_encode(array('code' => 100));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * 用户修改信息接口
     * **/
    public function set_user_new()
    {
        $item = $this->get_input();
        $where = array('account' => $item['account']);
        $res = $this->db_model->set_item('user', $where, $item);
        if ($res) {
            echo json_encode(array('code' => 100));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * ajax注册校验，返回用户信息（如果查询结果条数不为1，返回含error字段的数据）
     * 返回对象code：100为操作正确，非100为数据有错
     * 返回对象content：详情
     * **/
    public function check_register()
    {
        $data = $this->get_input();
        $where = array("account" => $this->input->post('account'));

        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) == 1) {
            echo json_encode(array('code' => 200, 'content' => '已经被注册过了'));
        } else if (sizeof($users) > 1) {
            //容错处理，账号有重复的
            echo json_encode(array('code' => 400, 'content' => '查询数据错误，检查数据库account') + $users);
        } else {
            $this->db_model->insert_item('user', $data);
            echo json_encode(array('code' => 100, 'content' => $data));
        }
    }

    /*
     * ajax登录校验，返回用户信息（如果查询结果条数不为1，返回含error字段的数据）
     * 返回对象code：100为操作正确，非100为数据有错
     * 返回对象content：详情
     * **/
    public function check_login()
    {
        $data = $this->get_input();
        $where = array("account" => $this->input->post('account'),
            "password" => $this->input->post('password'));

        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) == 1) {
            echo json_encode(array('code' => 100, 'content' => $data));
        } else if (sizeof($users) > 1) {
            //容错处理，账号有重复的
            echo json_encode(array('code' => 400, 'content' => '查询数据错误，检查数据库account') + $users);
        } else {
            //$this->db_model->insert_item('user', $data);
            echo json_encode(array('code' => 200, 'content' => "账号不存在或密码错误"));
        }
    }

    /*
     * 支付接口，返回付款链接
     * POST参数：json字符串，必选字段如下
     * out_trade_no：交易号，唯一
     * total_amount：价格，精确到小数点后2位
     * subject：交易物品
     * 参照文档：https://docs.open.alipay.com/api_1/alipay.trade.create/
     * **/
    public function create_pay()
    {
        $this->load->library('alipay-sdk-PHP/aop/AopClient');
        $this->load->library('alipay-sdk-PHP/aop/request/AlipayTradePrecreateRequest');
        $this->load->library('alipay-sdk-PHP/aop/SignData');

        $aop = new AopClient ();
        $aop->gatewayUrl = $this->config->item('gatewayUrl', 'config_alipay');
        $aop->appId = $this->config->item('appId', 'config_alipay');
        $aop->rsaPrivateKey = $this->config->item('rsaPrivateKey', 'config_alipay');
        $aop->alipayrsaPublicKey = $this->config->item('alipayrsaPublicKey', 'config_alipay');
        $aop->apiVersion = $this->config->item('apiVersion', 'config_alipay');
        $aop->signType = $this->config->item('signType', 'config_alipay');
        $aop->postCharset = $this->config->item('postCharset', 'config_alipay');
        $aop->format = $this->config->item('format', 'config_alipay');
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

        //输出二维码图像标签
        echo $this->create_qrcode($result->$responseNode->qr_code);
    }

    /*
     * 创建二维码图片标签
     * 输入：字符串
     * 返回：图片标签（图片缓存没有做清除）
     * **/
    private function create_qrcode($url)
    {
        $this->load->helper('phpqrcode/phpqrcode');
        $value = $url;                  //二维码内容

        //这里不使用配置文件
        $errorCorrectionLevel = 'L';    //容错级别
        $matrixPointSize = 5;           //生成图片大小

        //生成二维码图片
        $filename = '/captcha&qrcode/' . microtime() . '.png';
        QRcode::png($value, getcwd() . $filename, $errorCorrectionLevel, $matrixPointSize, 2, false);

//        $QR = getcwd() . $filename;                //已经生成的原始二维码图片文件
//        $QR = imagecreatefromstring(file_get_contents($QR));
//
//        //输出图片
//        imagepng($QR, 'qrcode.png');
//        imagedestroy($QR);
//        unlink(getcwd() . $filename);
        return '<img src="' . base_url() . $filename . '" alt="使用支付宝扫描支付">';
//        return '<img src="qrcode.png" alt="使用微信扫描支付">';
    }

    /*
     * 获取上传的字段
     * **/
    private function get_input()
    {
        return $this->input->post();
    }
}