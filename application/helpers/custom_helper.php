<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getCourseDetails')){
   function getCourseDetails($user_id){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
       //get data from database
       //$query = $ci->db->get_where('news',array('id'=>$user_id));
       
       // if($query->num_rows() > 0){
       //     $result = $query->row_array();
       //     return $result;
       // }else{
       //     return false;
       // }
       $options = array(
              'B.Sc'    => 'B.Sc',
              'BA'  => 'BA',
              'B.Com'  => 'B.Com',
              'BBA' => 'BBA',              
            );
       return $options;
   }
}