<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2018/3/10
 * Time: 13:52
 */

class Captcha_model extends CI_Model
{
    public function __construct()
    {
        $this->load->helper('captcha');//验证码辅助函数
    }

    /*
    * 返回一个关联数组参数，用echo输出image
    * 'image'是一个图片标签，'time' 是时间，'word' 是验证内容
    * **/
    public function get_captcha()
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
            'img_id' => 'id-captcha',
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