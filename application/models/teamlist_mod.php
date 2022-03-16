<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teamlist_mod extends CI_Model {

    function teamlist_mod()
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

    function data_rule($arr=true, $id=0)
    {

        $data = array();
        $data[$this->rule_administrator] = 'BOSS';
        $data[$this->rule_hrd] = 'HRD';
        $data[$this->rule_team] = 'STAFF';
        $data[$this->rule_client] = 'CLIENT';

        if(!$arr){
            return $val = isset($data[$id]) ? $data[$id] : '';
        }else{
           return $data;
        }
    }
    
    function get_rule()
    {
        $array = array();
        foreach ($this->data_rule() as $key=>$val)
        {
            $array[] = array('id' => $key,'name' => $val);
        }

        return $array;
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

    function get_teamlist($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("*"); 

        $array = array('status' => mysql_real_escape_string("aktif"), 'rule !=' => mysql_real_escape_string("1"));
        $this->db->where($array);

        if($limit) {
            $this->db->limit($take,$skip);
        }

        // if(!empty ($where)){
        //     if(count($where)){
        //         foreach ($where as $key=>$val){
        //             if(!empty ($val)){
        //                 $this->db->where($key, mysql_real_escape_string($val));
        //             }else{
        //                 $this->db->where($key, NULL, FALSE);
        //             }
        //         }
        //     }
        // }
        //$this->db->join('ds_admins', 'register.created_by = ds_admins.id','left');
        $i = $this->db->get('ds_users');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    
    function get_teamlist_adminv($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("*"); 

        $array = array('status' => mysql_real_escape_string("aktif"), 'rule !=' => mysql_real_escape_string("1"));
        $this->db->where($array);

        $this->db->order_by('last_punch_date','desc');

        $this->db->order_by('last_punch_in','asc');

        if($limit) {
            $this->db->limit($take,$skip);
        }
        
        $i = $this->db->get('ds_users');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }

    function get_sakit($data=null,$rows=false){
        $this->db->select('*');
        $this->db->where('id_user', mysql_real_escape_string($data));
        $i = $this->db->get('ds_sakit', 1, 0);

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }

    function get_sakit_now($data=null,$rows=false){
        $this->db->from('ds_sakit');
        $this->db->where('tanggal_mulai <=',date('Y-m-d'));
        $this->db->where('tanggal_akhir >=',date('Y-m-d'));
        $i = $this->db->get();

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }

    function get_cuti($data=null)
    {
        $this->db->select('*');
        $this->db->where('id_user', mysql_real_escape_string($data));
        $i = $this->db->get('ds_jumlah_cuti', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }

    function get_penilaian($data=null,$rows=false){
        $this->db->select('*');
        $this->db->order_by('id','desc');
        $this->db->where('id_user', mysql_real_escape_string($data));
        $i = $this->db->get('ds_penilaian');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
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

    function add_cuti($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_jumlah_cuti',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }

    function update($data,$user_id=0)
    {
        $this->db->where('id',  mysql_real_escape_string($user_id));
        $this->db->update('ds_users', $data);
    }

    function update_cuti($data,$user_id=0)
    {
        $this->db->where('id_user',  mysql_real_escape_string($user_id));
        $this->db->update('ds_jumlah_cuti', $data);
    }

    function non_aktif($data,$where){
        $this->db->where($data);
        $this->db->update('ds_users', $where);
    }
    function delete($id)
    {
        // $this->db->where($where);
        // $this->db->update('ds_users', $data);
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->delete('ds_users');
    }
    function delete_cuti($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_cuti');
    }
    function delete_izin($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_izin');
    }
    function delete_jumlah_cuti($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_jumlah_cuti');
    }
    function delete_penilaian($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_penilaian');
    }
    function delete_project($id=0)
    {
        $this->db->where('user_id', mysql_real_escape_string($id));
        $this->db->delete('ds_project');
    }
    function delete_report($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_report');
    }
    function delete_sakit($id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->delete('ds_sakit');
    }
    function delete_absen($id=0)
    {
        $this->db->where('user_id', mysql_real_escape_string($id));
        $this->db->delete('ds_today');
    }





}