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
     * 管理员获取报表接口
     * post字段必选'table'
     * **/
    public function get_info_table()
    {
        $form = array("table" => $this->input->post('table'),
            "key" => $this->input->post('key'));
        if (!$form['table']) {
            return;
        }
        switch ($form['table']) {
            case 'orders':
                $content = '<thead>' .
                    '<tr><th>序号</th><th>租房者</th><th>租房者联系方式</th><th>房屋id</th>' .
                    '<th>开始时间</th><th>结束时间</th><th>时长</th><th>支付宝交易号</th></tr>' .
                    '</thead><tbody>';
                if ($form['key'] == 'payed') {
                    $where = array('orders.state' => '已付款');
                } else {
                    $where = array('orders.state' => 'fail');
                }
                $joins[0] = array('table' => 'room', 'if' => 'orders.room_id = room.id', 'way' => 'out', 'word' => '*');
                $joins[1] = array('table' => 'user', 'if' => 'orders.user_id = user.id', 'way' => 'out', 'word' => '*');
                $res = $this->db_model->get_table_mult($form['table'], $joins, $where);

                if ($res) {
                    $innerContent = '';
                    foreach ($res as $item) {
                        $innerContent .= '<tr>' .
                            '<td>' . $item['id'] . '</td>' .
                            '<td>' . $item['name'] . '</td>' .
                            '<td>' . $item['tel'] . '</td>' .
                            '<td>' . $item['room_id'] . '</td>' .
                            '<td>' . $item['begin'] . '</td>' .
                            '<td>' . $item['end'] . '</td>' .
                            '<td>' . $item['during'] . '<strong>天</strong></td>' .
                            '<td>' . $item['trade_no'] . '</td>>' .
                            '</tr>';
                    }
                    $content .= $innerContent . '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                } else {
                    $content .= '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                }
                break;
            case 'rooms':
                $content = '<thead>' .
                    '<tr><th>房间id</th><th>简要介绍</th><th>位置</th><th>详细介绍</th><th>价格（￥/天）</th><th>评分</th>' .
                    '<th>联系人</th><th>联系方式</th><th>房东id</th><th>操作</th>' .
                    '</thead><tbody>';
                if ($form['key'] == 'rented') {
                    $where = array('state' => 'rented');
                } else if ($form['key'] == 'identifying') {
                    $where = array('state' => 'identifying');
                } else if ($form['key'] == 'identified') {
                    $where = array('state' => 'identified');
                }
                $res = $this->db_model->get_table('room', $where);

                if ($res) {
                    $innerContent = '';
                    foreach ($res as $item) {
                        $innerContent .= '<tr>' .
                            '<td>' . $item['id'] . '</td>' .
                            '<td>' . $item['summary'] . '</td>' .
                            '<td>' . $item['city'] . $item['block'] . $item['address'] . '</td>' .
                            '<td>' . $item['introduce'] . '</td>' .
                            '<td>' . $item['price'] . '</td>' .
                            '<td>' . $item['grade'] . '</td>' .
                            '<td>' . $item['connect_name'] . '</td>' .
                            '<td>' . $item['connect_tel'] . '</td>>' .
                            '<td>' . $item['owner_id'] . '</td>>' .
                            '<td><button class="btn-success" data-info="users-' . $item['id'] . '">推荐</button>' .
                            '<button class="btn-warning" data-info="area-' . $item['id'] . '">同意</button>' .
                            '<button class="btn-danger" data-info="area-' . $item['id'] . '">退回</button></td>' .
                            '</tr>';
                    }
                    $content .= $innerContent . '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                } else {
                    $content .= '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                }
                break;
            case 'users':
                $content = '<thead>' .
                    '<tr><th>序号</th><th>账号</th><th>密码</th><th>名字</th><th>权限</th><th>联系方式</th><th>操作</th>' .
                    '</thead><tbody>';
                $where = array('limited' => $form['key']);
                $res = $this->db_model->get_table('user', $where);
                if ($res) {
                    $innerContent = '';
                    foreach ($res as $item) {
                        $innerContent .= '<tr>' .
                            '<td>' . $item['id'] . '</td>' .
                            '<td>' . $item['account'] . '</td>' .
                            '<td>' . $item['password'] . '</td>' .
                            '<td>' . $item['name'] . '</td>' .
                            '<td>' . $item['limited'] . '</td>' .
                            '<td>' . $item['tel'] . '</td>' .
                            '<td><button class="btn-success" data-info="users-' . $item['id'] . '">修改</button></td>' .
                            '</tr>';
                    }
                    $content .= $innerContent . '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                } else {
                    $content .= '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                }
                break;
            case 'brands':
                $content = '<thead>' .
                    '<tr><th>序号</th><th>标题</th><th>发布时间</th><th>内容</th><th>发布者</th><th>操作</th></tr>' .
                    '</thead><tbody>';
                $where = array('state' => $form['key']);
                $res = $this->db_model->get_table('brand', $where);
                if ($res) {
                    $innerContent = '';
                    foreach ($res as $item) {
                        $innerContent .= '<tr>' .
                            '<td>' . $item['id'] . '</td>' .
                            '<td>' . $item['title'] . '</td>' .
                            '<td>' . $item['time'] . '</td>' .
                            '<td>' . $item['content'] . '</td>' .
                            '<td>' . $item['author'] . '</td>' .
                            '<td><button class=\'btn-success\'>修改</button>' .
                            '<button class=\'btn-danger bp-delete\'>删除</button></td>' .
                            '</tr>';
                    }
                    $content .= $innerContent . '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                } else {
                    $content .= '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                }
                break;
            case 'area':
                $content = '<thead>' .
                    '<tr><th>序号</th><th>地名</th><th>拼音</th><th>所属城市序号</th><th>操作</th></tr>' .
                    '</thead><tbody>';
                if (!$form['key']) {
                    $where = array('belong' => $form['key']);
                } else {
                    $where = array('belong !=' => 0);
                }
                $res = $this->db_model->get_table('area', $where);
                if ($res) {
                    $innerContent = '';
                    foreach ($res as $item) {
                        $innerContent .= '<tr>' .
                            '<td>' . $item['id'] . '</td>' .
                            '<td>' . $item['name'] . '</td>' .
                            '<td>' . $item['py'] . '</td>' .
                            '<td>' . $item['belong'] . '</td>' .
                            '<td><button class="btn-success hide" data-info="area-' . $item['id'] . '">修改</button>' .
                            '<button class=\'btn-danger bp-delete\' data-info="area-' . $item['id'] .
                            '" onclick="delItem(this)">删除</button></td>' .
                            '</tr>';
                    }
                    $content .= $innerContent . '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                } else {
                    $content .= '</tbody>';
                    echo json_encode(array('code' => 100, 'content' => $content));
                }
                break;
            default:
                echo json_encode(array('code' => 400, 'content' => '请求错误'));
                return;
        }
        return;
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
                    <tr><th>序号</th><th>房间号</th><th>开始时间</th><th>结束时间</th><th>交易号</th><th>状态</th></tr>
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
                    '<td>' . $item['out_trade_no'] . '</td>' .
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
     * 获取资金信息接口
     * 表单参数必填用户id，其余字段选填
     * **/
    public function get_bill($cid = -1)
    {
        if ($cid == -1) {
            echo json_encode(array('code' => 400, 'content' => '用户数据错误'));
            return;
        }
        $content = '<thead>
                    <tr><th>序号</th><th>房间号</th><th>开始时间</th><th>结束时间</th><th>交易号</th><th>资金来往</th></tr>
                    </thead>
                    <tbody>';
        $join = array('table' => 'room', 'if' => 'orders.room_id = room.id', 'way' => 'out', 'word' => '*');
        $joins[0] = $join;
        $res = $this->db_model->get_table_mult('orders', $joins, array('user_id' => $cid));
        if ($res) {
            $innerContent = '';
            foreach ($res as $item) {
                $price = strtotime($item['end']) - strtotime($item['begin']);
                $total = $price / 60 / 60 / 24 * $item['price'];
                $innerContent .= '<tr>' .
                    '<td>' . $item['id'] . '</td>' .
                    '<td>' . $item['room_id'] . '</td>' .
                    '<td>' . $item['begin'] . '</td>' .
                    '<td>' . $item['end'] . '</td>' .
                    '<td>' . $item['out_trade_no'] . '</td>' .
                    '<td>￥' . $total . '</td>' .
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
     * 通用接口，添加数据接口
     * **/
    public function submit_tutu($table = null)
    {
        if (!$table) {
            echo json_encode(array('code' => 400,
                'content' => 'URL错误',
                'res' => '错误的路由请求'));
        }
        $item = $this->get_input();
        $res = $this->db_model->insert_item($table, $item);
        if ($res) {
            echo json_encode(array('code' => 100));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * 通用接口，删除数据接口，post数据
     * 关联数组，必选table，两种传入方式
     * **/
    public function delete_tutu($table = null)
    {
        $item = $this->get_input();
        if (!$table && !$item['table']) {
            echo json_encode(array('code' => 400,
                'content' => 'no table selected',
                'res' => '错误的请求'));
        } else if (!$table) {
            $table = $item['table'];
            unset($item['table']);
        }
        $where = $item;
        $res = $this->db_model->delete_item($table, $where);
        if (!$res) {
            echo json_encode(array('code' => 100,
                'content' => '成功'));
        } else {
            echo json_encode(array('code' => 400,
                'content' => '糟糕，失败了',
                'res' => $this->db_model->db->last_query()));
        }
    }

    /*
     * 添加订单接口
     * **/
    public function submit_order($arg = array())
    {
        //$item = $this->get_input();
        $item['room_id'] = $arg['room_id'];
        $item['user_id'] = $arg['user_id'];
        $item['begin'] = $arg['begin'];
        $item['end'] = $arg['end'];
        $item['out_trade_no'] = $arg['out_trade_no'];
        $item['during'] = $arg['during'];
        $res = $this->db_model->insert_item('orders', $item);
        if ($res) {
            //echo json_encode(array('code' => 100));
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
        //$data = $this->get_input();
        $where = array("account" => $this->input->post('account'),
            "password" => $this->input->post('password'));

        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) == 1) {
            echo json_encode(array('code' => 100, 'content' => $users));
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
        //验证cookie
        $where = array("account" => get_cookie('uin'),
            "password" => get_cookie('key'));
        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) == 1) {
            //echo json_encode(array('code' => 100, 'content' => $users[0]));
        } else {
            //错误处理
            echo "<script>alert('请检查登录状态，再尝试刷新本页面')</script>";
            return;
        }

        //创建支付
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
        $request = new AlipayTradePrecreateRequest();

        $bizContent = $this->input->get();
        if (!$bizContent || !array_key_exists("out_trade_no", $bizContent)
            || !array_key_exists("price", $bizContent)
            || !array_key_exists("subject", $bizContent)
            || !array_key_exists("during", $bizContent)) {
            echo "tutu_response{'code':'40004','msg':'缺失必要的字段'}";//后期封装
            return;
        }
        $bizContent['total_amount'] = $bizContent['price'] * $bizContent['during'];//计算出总价格
        $bizContent['timeout_express'] = '3m';//超时时间，m分钟，h小时，d天
        $request->setBizContent(json_encode($bizContent));
        $result = $aop->execute($request);

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;

        //以下为处理代码
        if (!empty($resultCode) && $resultCode == 10000) {
            echo "<h1>二维码将在3分钟后失效，并且将关闭此次交易。</h1><hr/>";
            //var_dump($result->$responseNode->qr_code);

            $this->submit_order($bizContent);
        } else {
            echo "失败";
        }

        //输出二维码图像标签
        echo $this->create_qrcode($result->$responseNode->qr_code);
    }

    /*
     * 支付查询接口，返回订单状态信息
     * POST参数：json字符串，可选字段如下，至少选择一个字段
     * out_trade_no：系统提供的交易号，唯一，与创建的订单号对应
     * trade_no：支付宝保存的交易号，唯一，支付宝返回信息中获取，
     * 参照文档：https://docs.open.alipay.com/api_1/alipay.trade.create/
     * **/
    public function execute_pay()
    {
        $this->load->library('alipay-sdk-PHP/aop/AopClient');
        $this->load->library('alipay-sdk-PHP/aop/request/AlipayTradeQueryRequest');
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
        $request = new AlipayTradeQueryRequest();

        $bizContent = $this->input->get();
        if (!$bizContent ||
            !(array_key_exists("out_trade_no", $bizContent) || !array_key_exists("out_trade_no", $bizContent))
        ) {
            echo "tutu_response{'code':'40004','msg':'缺失必要的字段'}";//后期封装
            return;
        }
        $request->setBizContent(json_encode($bizContent));
        $result = $aop->execute($request);

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;

        //以下为处理代码
        if (!empty($resultCode) && $resultCode == 10000) {
            //echo "成功";
            //var_dump($result->$responseNode);
            $where['out_trade_no'] = $result->$responseNode->out_trade_no;
            $items['trade_no'] = $result->$responseNode->trade_no;
            $items['state'] = '已付款';
            $this->db_model->set_item('orders', $where, $items);
            echo json_encode($result);
        } else {
            $where['out_trade_no'] = $result->$responseNode->out_trade_no;
            //$items['trade_no'] = $result->$responseNode->trade_no;
            $items['state'] = 'fail';
            $this->db_model->set_item('orders', $where, $items);
            echo json_encode($result);;
        }
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