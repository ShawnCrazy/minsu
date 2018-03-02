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
     * 获取用户账号信息
     * 输入参数：table默认用户表，where查询条件（php数组传入）
     * 输出数组：所有用户信息
     * **/
//    public function get_users($where = array(1 => 1), $table = 'user')
//    {
//        $query = $this->db->where($where)->get($table);
//        if (!$query) {
//            var_dump($this->db->error()); // Has keys 'code' and 'message'，错误捕获
//        } else {
////            echo $this->db->last_query();
//            return $query->result_array();
//        }
//    }

    /*
     * 获取订单信息
     * 输入参数：table必须填写表名,$where默认
     * 输出数组：信息表所有内容
     * **/
    public function get_table($table = 'orders', $where = array(1 => 1))
    {
        $query = $this->db
            ->where($where)
            ->get($table);
        if (!$query) {
            var_dump($this->db->error()); // Has keys 'code' and 'message'，错误捕获
        } else {
//            echo $this->db->last_query();
            return $query->result_array();
        }
//        $query = $this->db->get_where('brand', array('slug' => $slug));
//        return $query->row_array();
    }

    /*
     * 修改信息表信息
     * 输入参数：$table表，$where数组，$item数组
     * where是查询条件
     * item是具体修改内容，如：（"id"=>1,"name"=>"user"）
     * **/
    public function set_item($table, $where, $item)
    {
        $this->db->update($table, $item, $where);
    }

    /*
     * 删除信息表信息
     * 输入参数：$table表，$where数组
     * where是查询条件
     * **/
    public function delete_item($table, $where)
    {
        $this->db->delete($table, $where);
    }

    /*
     * 添加信息表信息
     * 输入参数：$table表，$item数组
     * item是具体修改内容，如：（"id"=>1,"name"=>"user"）
     * **/
    public function insert_item($table, $item)
    {
        $this->db->insert($table, $item);
    }
//    public function set_orders()
//    {
//        $this->load->helper('url');
//
//        $slug = url_title($this->input->post('title'), 'dash', TRUE);
//
//        $data = array(
//            'title' => $this->input->post('title'),
//            'slug' => $slug,
//            'text' => $this->input->post('text')
//        );
//
//        return $this->db->insert('orders', $data);
//    }
}