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
    }

    /*
     * 默认路由页面，跳转主页
     * **/
    public function index()
    {
        $data['captcha'] = $this->captcha_model->get_captcha();
//        var_dump($data['captcha']);
        $this->load->view('templates/header');
        $this->load->view('pages/main');
        $this->load->view('templates/footer', $data);
    }

    /*
     * 路由页面，跳转搜索结果页
     * **/
    public function unitlist()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }

    /*
     * 路由页面，跳转注册页
     * **/
    public function register()
    {
        $this->load->view('pages/register');
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