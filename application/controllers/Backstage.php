<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backstage extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->helper('url');
        $this->load->model('db_model');
        $this->load->model('captcha_model');

        //图标显示,表示订单、用户、房间、公告、添加城市
        //$this->active = array('', '', '', '', '');
    }

    /*
     * 默认路由页面，转到登录页
     * **/
    public function index()
    {
        $this->login();
    }

    /*
     * 路由页面，登录页
     * **/
    public function login()
    {
        $this->load->helper('captcha');//验证码辅助函数
        $data['captcha'] = $this->captcha_model->get_captcha();
        $this->load->view('backpages/login', $data);
    }

    /*
     * 路由页面，后台页面
     * 修改跳转逻辑
     * **/
    public function main()
    {
        $this->load->helper('file');//文件辅助函数
        delete_files('./captcha');//删除验证图片文件夹内容

        $this->load->view('templates/bp_main_blank');
    }

    /*
     * 路由页面，订单信息
     * **/
    public function orders()
    {
        $this->load->helper('file');//文件辅助函数
        delete_files('./captcha');//删除验证图片文件夹内容

//        $this->active[0] = 'class = \'active-menu\'';
        $data['active'] = array('class = \'active-menu\'', '', '', '', '');
        $data['res'] = $this->db_model->get_table('orders');
        $this->load->view('templates/bp_header', $data);
        $this->load->view('backpages/bp_orders', $data);
    }

    /*
     * 路由页面，用户信息
     * **/
    public function users()
    {
        $data['active'] = array('', 'class = \'active-menu\'', '', '', '');
        $data['res'] = $this->db_model->get_table('user');
        $this->load->view('templates/bp_header', $data);
        $this->load->view('backpages/bp_users', $data);
    }

    /*
     * 路由页面，房间记录信息
     * **/
    public function rooms()
    {
        //构建表连接信息,word必填，如果不知道则填*
        $join['word'] = 'room.id, user.name, room.price, room.introduce, room.grade, room.address, room.city, room.block, user.tel';
        $join['table'] = 'user';
        $join['if'] = 'room.owner_id = user.id';
        $join['way'] = 'left outer';

        //构建二维数组
        $joins = array($join);

        $data['active'] = array('', '', 'class = \'active-menu\'', '', '');
        $data['res'] = $this->db_model->get_table_mult('room', $joins);
        //echo $this->db_model->db->last_query();

//        var_dump($data['res']);
        $this->load->view('templates/bp_header', $data);
        $this->load->view('backpages/bp_rooms', $data);
    }

    /*
     * 路由页面，公告发布页面
     * **/
    public function brands()
    {
        $data['active'] = array('', '', '', 'class = \'active-menu\'', '');
        $data['res'] = $this->db_model->get_table('brand');
        $this->load->view('templates/bp_header', $data);
        $this->load->view('backpages/bp_brands', $data);
    }

    /*
    * 路由页面，公添加城市页面
    * **/
    public function areas()
    {
        $data['active'] = array('', '', '', '', 'class = \'active-menu\'');
        $data['res'] = $this->db_model->get_table('area');
        $this->load->view('templates/bp_header', $data);
        $this->load->view('backpages/bp_areas', $data);
    }

    /*
     * ajax登录校验，返回用户信息（如果查询结果条数不为1，返回含error字段的数据）
     * **/
    public function check()
    {
        $where = array("account" => $this->input->post('account'),
            "password" => $this->input->post('pwd'));

        $users = $this->db_model->get_table('administrator', $where);
        if (sizeof($users) == 1) {
            echo json_encode($users[0]);
        } else if (sizeof($users) > 1) {
            //容错处理，账号有重复的
            echo json_encode(array('error' => '查询数据错误') + $users);
        } else {
            echo json_encode(array('error' => '没有用户数据'));
        }
    }

    /*
     * ajax返回用户信息数组，未使用
     * **/
    public function get_users()
    {
        $users = $this->db_model->get_table('user');
        if (sizeof($users) > 1) {
            echo json_encode($users);
        } else {
            echo json_encode(array('error' => '没有用户数据'));
        }
    }
}
