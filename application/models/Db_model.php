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
     * 获取单表信息
     * 输入参数：table必须填写表名,$where默认
     * 输出数组：信息表所有内容
     * **/
    public function get_table($table, $where = array(1 => 1))
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
     * 获取多表信息
     * 输入参数：table必须填写表名,joins必填，$where默认
     * joins为二维数组，可建立多个表连接,此处全连接'outer'
     * joins字元素字段有table、if。if应该是字符串，如A.id = B.id
     * 输出数组：信息表所有内容
     * **/
    public function get_table_mult($table, $joins, $where = array(1 => 1))
    {
        if (!is_array($joins)) {
            return array('error' => 'join参数应该传入数组');
        }

        foreach ($joins as $key=>$join){
            $this->db
                ->join($join['table'], $join['if']);
        }
        $query = $this->db
            ->where($where)
            ->get($table);
        if (!$query) {
            var_dump($this->db->error()); // Has keys 'code' and 'message'，错误捕获
        } else {
//            echo $this->db->last_query();
            return $query->result_array();
        }
    }

    /*
     * 修改信息表信息
     * 输入参数：$table表，$where数组，$item数组
     * where是查询条件
     * item是具体修改内容，如：（"id"=>1,"name"=>"user"）
     * **/
    public function set_item($table, $where, $item)
    {
        $query = $this->db->update($table, $item, $where);
        if($query){
            return true;
        }else{
            return $query;
        }
        return true;
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