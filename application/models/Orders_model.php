<?php
/**
 * Created by PhpStorm.
 * User: cvm
 * Date: 2018/2/27
 * Time: 16:04
 */

class Orders_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_orders($slug = FALSE)
    {
        if ($slug === FALSE)
        {
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