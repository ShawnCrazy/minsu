<?php
/**
 * Created by PhpStorm.
 * User: cvm
 * Date: 2018/2/27
 * Time: 16:04
 */

class Db_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /*
     * 获取某个用户的账号信息
     * 输入参数：table默认用户表，where查询条件（php数组传入）
     * 输出数组：单个用户所有信息**/
    public function get_user($where = array(1 => 1), $table = 'user')
    {
        $query = $this->db->where($where)->get($table);
        if (!$query) {
            var_dump($this->db->error()); // Has keys 'code' and 'message'，错误捕获
        } else {
//            echo $this->db->last_query();
            return $query->result_array();
        }
    }

    public function get_orders($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('orders');
            return $query->result_array();
        }

        $query = $this->db->get_where('brand', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_orders()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('orders', $data);
    }
}