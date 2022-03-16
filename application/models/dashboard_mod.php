<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_mod extends CI_Model {

    function dashboard_mod()
    {
        parent::__construct();
    }

    function get_count_punchin_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_today');
        $this->db->where('user_id',mysql_real_escape_string($id));
        $this->db->like('punch_date', $yearnow, 'after');   
        // Produces: WHERE field LIKE 'Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    } 

    function get_count_project($id=0)
    { 

        $this->db->from('ds_project');
        $this->db->where('user_id',mysql_real_escape_string($id));                 
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_project_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_project');
        $this->db->where('user_id',mysql_real_escape_string($id));
        $this->db->like('project_start', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_sakit_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_sakit');
        $this->db->where('id_user',mysql_real_escape_string($id)); 
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_cuti_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_cuti');
        $this->db->where('id_user',mysql_real_escape_string($id));
        $this->db->where('approved','1');
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_izin_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_izin');
        $this->db->where('id_user',mysql_real_escape_string($id)); 
        $this->db->where('approved','1');
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_tugas_y($id=0)
    {
        $yearnow = date("Y");

        $this->db->from('ds_tugas');
        $this->db->where('id_user',mysql_real_escape_string($id));
        $this->db->where('approved','1');
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'                       
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_cuti_pending()
    {
        $yearnow = date("Y");

        $this->db->from('ds_cuti');
        $this->db->where('approved','0');      
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_izin_pending()
    {
        $yearnow = date("Y");

        $this->db->from('ds_izin');
        $this->db->where('approved','0');      
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'
        $count = $this->db->count_all_results();

        echo $count;
    }

    function get_count_tugas_pending()
    {
        $yearnow = date("Y");

        $this->db->from('ds_tugas');
        $this->db->where('approved','0');      
        $this->db->like('tanggal_mulai', $yearnow, 'after');   
        // Produces: WHERE title LIKE ''Y%'
        $count = $this->db->count_all_results();

        echo $count;
    }
    
}