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
        $data['captcha'] = $this->get_captcha();
//        echo $data['captcha'];
//        $this->get_captcha();
//        $sqldata["account"] = $this->input->post('account');
//        $sqldata["password"] = $this->input->post('pwd');
        $this->load->view('backpages/login', $data);
    }

    /*
     * 路由页面，订单信息
     * **/
    public function orders()
    {
        $this->load->helper('file');//文件辅助函数
        delete_files('./captcha');//删除验证图片文件夹内容

        $data['orders_arr'] = $this->db_model->get_table('orders');
//	    $this->cookie->set_cookie('uid','123456');
//		$this->load->view('backpages/login');
//        $this->load->view('backpages/bp_index');
        $this->load->view('templates/bp_header');
        $this->load->view('backpages/bp_index', $data);
    }

    /*
     * 路由页面，用户信息
     * **/
    public function users()
    {
        $data['orders_arr'] = $this->db_model->gettable('user');
//	    $this->cookie->set_cookie('uid','123456');
//		$this->load->view('backpages/login');
//        $this->load->view('backpages/bp_index');
        $this->load->view('templates/bp_header');
        $this->load->view('backpages/bp_users', $data);
    }

    /*
     * ajax登录校验，返回用户信息（查询结果条数不为1，返回含error字段的数据）
     * **/
    public function check()
    {
        $where = array("account" => $this->input->post('account'),
            "password" => $this->input->post('pwd'));
        $users = $this->db_model->get_table('user', $where);
        if (sizeof($users) > 1) {
            echo json_encode(array('error' => '查询数据错误') + $users);
        } else if (sizeof($users) == 1) {
            echo json_encode($users[0]);
        } else {
            echo json_encode(array('error' => '没有用户数据'));
        }
    }

    /*
     * ajax返回用户信息，
     * **/
    public function get_users()
    {
        $users = $this->db_model->get_user();
        if (sizeof($users) > 1) {
            echo json_encode($users);
        } else if (sizeof($users) == 1) {
            echo json_encode($users[0]);
        } else {
            echo json_encode(array('error' => '没有用户数据'));
        }
    }

    /*
     * 返回一个关联数组参数，用echo输出image
     * 'image'是一个图片标签，'time' 是时间，'word' 是验证内容
     * **/
    private function get_captcha()
    {
        $vals = array(
//            'word' => 'Random word',
            'img_path' => './captcha/',//相对路径，此处为Host/minsu/captcha/目录下
            'img_url' => base_url() . 'captcha/',//网络路径，此项与img_path必填
            'font_path' => 'texb.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 4,
            'font_size' => 40,
            'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        return $cap;
    }
}
