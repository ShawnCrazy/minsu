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
        $this->load->helper('captcha');//验证码辅助函数
    }

    /*
     * 默认路由页面，跳转主页
     * **/
    public function index()
    {
        $data['captcha'] = $this->get_captcha();
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

    /*
     * 返回一个关联数组参数，用echo输出image
     * 'image'是一个图片标签，'time' 是时间，'word' 是验证内容
     * **/
    private function get_captcha()
    {
        $vals = array(
//            'word' => 'Random word',
            'img_path' => './captcha&qrcode/',//相对路径，此处为Host/minsu/captcha/目录下
            'img_url' => base_url() . 'captcha&qrcode/',//网络路径，此项与img_path必填
            'font_path' => './upload/handwritten.ttf',//字体路径
            'img_width' => '150',
            'img_height' => 50,
            'expiration' => 7200,
            'word_length' => 4,
            'font_size' => 50,
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