<?php
/**
 * Created by PhpStorm.
 * User: cvm
 * Date: 2018/2/27
 * Time: 18:45
 */

class File_upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('pages/upload', array('error' => ' '));
    }

    public function do_upload()
    {
        $config['upload_path'] = getcwd().'/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
//            var_dump($this->upload->data());
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('pages/upload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $upload_info = $this->upload->data();
            echo '上传文件成功，文件路径为：'.$upload_info['file_path'].
                '文件名为：'.$upload_info['file_name'];
            //$this->load->view('upload_success', $data);
        }
    }
}