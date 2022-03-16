<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_mod extends CI_Model {

    function User_mod()
    {
        parent::__construct();
    }
    
     /*
     * Categori untuk type User
     */
    var $rule_administrator = 1;
    var $rule_hrd = 2;
    var $rule_team = 3;
    var $rule_client = 4;

    function get_rule()
    {
        $array = array();
        foreach ($this->data_rule() as $key=>$val)
        {
            $array[] = array('id' => $key,'name' => $val);
        }

        return $array;
    }

    function data_rule($arr=true, $id=0)
    {

        $data = array();
        $data[$this->rule_administrator] = 'BOS';
        $data[$this->rule_hrd] = 'HRD';
        $data[$this->rule_team] = 'STAF';
        $data[$this->rule_client] = 'CLIENT';

        if(!$arr){
            return $val = isset($data[$id]) ? $data[$id] : '';
        }else{
           return $data;
        }
    }

    function get_byemail($email = null)
    {
        $this->db->select('*');
        $this->db->where('email', mysql_real_escape_string($email));
        $i = $this->db->get('ds_users', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }

    function get_byuid($user_id = 0)
    {
        $this->db->select('*');
        $this->db->where('id', mysql_real_escape_string($user_id));
        $i = $this->db->get('ds_users', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }
    
    function get_bytoken($token = null)
    {
        $this->db->select('*');
        $this->db->where('token', mysql_real_escape_string($token));
        $i = $this->db->get('ds_users', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }

    function add($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_users',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }
    
    function add_maps($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_user_maps',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }

    function get_bylogin($email = null,$pass = null)
    {
        $this->db->select('*');
        $this->db->where('email', mysql_real_escape_string($email));
        $this->db->where('password', mysql_real_escape_string($pass));
        $i = $this->db->get('ds_users', 1, 0);

        $var = ($i->num_rows() > 0) ? $i->row() : false;
        if($var){
            $data = array(
                'last_loggedin_date' => date('Y-m-d H:i:s')
            );
            $this->db->where('id', $var->id);
            $this->db->update('ds_users', $data);
        }
        return $var;
    }

    function update($data,$user_id=0)
    {
        $this->db->where('id',  mysql_real_escape_string($user_id));
        $this->db->update('ds_users', $data);
    }
    
    function get_users($rows=false,$where=null,$limit=false,$skip=0,$take=10,$sort=false)
    {
        $this->db->select("*");
        
        if($sort){
            $this->db->order_by($sort['field'],$sort['sort']);
        }else{
            $this->db->order_by('name','asc');
        }

        if($limit) {
            $this->db->limit($take,$skip);
        }

        if(!empty ($where)){
            if(count($where)){
                foreach ($where as $key=>$val){
                    if(!empty ($val)){
                        $this->db->where($key, mysql_real_escape_string($val));
                    }else{
                        $this->db->where($key, NULL, FALSE);
                    }
                }
            }
        }
        $i = $this->db->get('ds_users');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    
    function get_maps($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select('
            ds_user_maps.*,
            ds_users.name,
            ds_users.company,
            ds_users.rule,
            ds_users.email
            ');
        $this->db->order_by('ds_users.name','asc');

        if($limit) {
            $this->db->limit($take,$skip);
        }

        if(!empty ($where)){
            if(count($where)){
                foreach ($where as $key=>$val){
                    if(!empty ($val)){
                        $this->db->where($key, mysql_real_escape_string($val));
                    }else{
                        $this->db->where($key, NULL, FALSE);
                    }
                }
            }
        }
        $this->db->join('ds_users', 'ds_user_maps.child_id = ds_users.id','left');
        $i = $this->db->get('ds_user_maps');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    
    function delete_maps($user_id=0,$child_id=0)
    {
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->where('child_id',  mysql_real_escape_string($child_id));
        $this->db->delete('ds_user_maps');
    }
    
    function delete($user_id=0)
    {
        #User account
        $this->db->where('id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_users');
        
        #User maps
        $this->delete_maps_byuser($user_id);
        $this->delete_maps_bychild($user_id);
        
        #User project maps
        $this->delete_project_maps($user_id);
        
        #User report
        $this->delete_report($user_id);
        $this->delete_report_comment($user_id);
        $this->delete_report_file($user_id);
        $this->delete_report_read($user_id);
        
        #User notification
        $this->delete_notification($user_id);
        
        #User today
        $this->delete_today($user_id);
    }
    
    private function delete_maps_byuser($user_id=0)
    {    
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_user_maps');
    }
    
    private function delete_maps_bychild($user_id=0)
    {    
        $this->db->where('child_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_user_maps');
    }
    
    private function delete_project_maps($user_id=0)
    {    
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_project_maps');
    }
    
    private function delete_report($user_id=0)
    {    
        $this->db->where('created_by',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_reports');
    }
    
    private function delete_report_comment($user_id=0)
    {
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_report_comments');
    }
    
    private function delete_report_file($user_id=0)
    {
        $this->db->where('upload_by',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_report_files');
    }
    
    private function delete_report_read($user_id=0)
    {
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_report_read');
    }
    
    private function delete_notification($user_id=0)
    {
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_notifications');
    }
    
    private function delete_today($user_id=0)
    {
        $this->db->where('user_id',  mysql_real_escape_string($user_id));
        $this->db->delete('ds_today');
    } 
}