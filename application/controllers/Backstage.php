<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backstage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
        $this->load->model('orders_model');
    }

    public function index()
	{
	    echo "抱歉，此页面不能使用";
//        $this->load->view('templates/bp_footer');
	}
    public function login()
    {
        $this->load->helper('cookie');
        $this->load->helper('url');
        $this->load->view('backpages/login');
    }
    public function orders()
    {
        $data['orders_arr'] = $this->orders_model->get_orders();
//	    $this->cookie->set_cookie('uid','123456');
//		$this->load->view('backpages/login');
//        $this->load->view('backpages/bp_index');
        $this->load->view('templates/bp_header');
        $this->load->view('backpages/bp_index', $data);
    }
}
