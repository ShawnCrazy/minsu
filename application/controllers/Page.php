<?php
/**
 * Created by PhpStorm.
 * User: cvm
 * Date: 2018/2/27
 * Time: 14:35
 */

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_model');
        $this->load->helper('url_helper');
        $this->load->model('captcha_model');
        $this->load->helper('cookie');
    }

    /*
     * 默认路由页面，跳转主页
     * **/
    public function index()
    {
        $data['captcha'] = $this->captcha_model->get_captcha();
        $data['areas'] = $this->db_model->get_table('area');
        $this->load->view('templates/header');
        $this->load->view('pages/main', $data);
        $this->load->view('templates/footer', $data);
    }

    /*
     * 路由页面，跳转搜索结果页
     * **/
    public function unitlist()
    {
        $data['captcha'] = $this->captcha_model->get_captcha();
        $data['rooms']  = $this->db_model->get_table('room');
        $this->load->view('templates/header');
        $this->load->view('pages/unitlist', $data);
        $this->load->view('templates/footer');
    }

    /*
     * 路由页面，跳转单个房间详情
     * **/
    public function roominfo($id = 0)
    {
        $data['captcha'] = $this->captcha_model->get_captcha();
        $result = $this->db_model->get_table('room', array('id' => $id));
        if (count($result) != 1) {
            echo '没有数据';
            return;
        }
        $data['room'] = $result[0];
        $result = $this->db_model->get_table('user', array('id' => $result[0]["owner_id"]));
        $data['person'] = $result[0];

        $this->load->view('templates/header');
        $this->load->view('pages/roominfo', $data);
        //$this->load->view('templates/footer');
    }

    /*
     * 路由页面，跳转公告页
     * **/
    public function brand()
    {
        $res = $this->db_model->get_table('brand');
        $data['brands'] = $res;
        $this->load->view('pages/brand', $data);
    }

    /*
     * 路由页面，跳转注册页
     * **/
    public function register()
    {
        $this->load->view('pages/register');
    }

    /*
     * 路由页面，跳转个人中心
     * **/
    public function person()
    {
//        校验账号密码
//        var_dump(get_cookie('uin'));
        $res = $this->db_model->get_table('user', array('account' => get_cookie('uin'), 'password' => get_cookie('key')));
        $data['p_info'] = $res[0];
        if (!is_null($data['p_info'])) {
            $this->load->view('pages/person', $data);
        } else {
            echo '<script>location.href = "' . site_url('page') . '"</script>';
        }
    }

    /*
     * 路由页面，跳转文本编辑页
     * **/
    public function editor()
    {
        $data['captcha'] = $this->captcha_model->get_captcha();
        $this->load->view('templates/header');
        $this->load->view('templates/editor_header');
        $this->load->view('pages/editor');//界面编辑这个文件里的内容，交互在custom.js
        $this->load->view('templates/footer_script', $data);
    }

    public function view($page = 'home')
    {
//        访问localhost/index.php/Page/view
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            echo "现在在view方法中,参数为" . $page;
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        //$this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function orders($sql = '')
    {
//        $this->input->post();
//        $this->input->get();
//        $this->input->cookie();
//        $this->input->server();
//        $data['account'] = $this->input->post('account');;
//        $data['pwd'] = $this->input->post('pwd');
        $data['id'] = $this->input->post('id');
        $data['title'] = ucfirst('title');
        $data['news'] = $this->db_model->get_orders();
        if (empty($data['news'])) {
            show_404();
        }
        echo json_encode($data);

//        $this->load->view('templates/header', $data);
//        $this->load->view('pages/'.'home', $data);
//        $this->load->view('templates/footer', $data);
    }

}