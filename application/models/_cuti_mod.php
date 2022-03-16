<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Cuti_mod extends CI_Model {



    function cuti_mod()

    {

        parent::__construct();

    }


    function add_cuti_touser($data=null,$id=null){

        $this->db->where('id',  mysql_real_escape_string($id));

        $this->db->update('ds_users', $data);

    }


    function add($data=null)

    {

        $return = 0;

        if($data != null){

            $this->db->insert('ds_cuti',$data);



            $return = $this->db->insert_id();

        }



        return $return;

    }



    function get_cuti($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5)

    {
        $this->db->select("*");
        $this->db->where('tanggal_mulai >=', date('Y').'-01-01');
        $this->db->where('tanggal_akhir <=', date('Y').'-12-31');
        // $this->db->select("*");

        // $this->db->order_by('id','desc');



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

        if($search != null){

            if(count($search)){

                foreach ($search as $key=>$val){

                    if(!empty ($val)){

                        $this->db->like($key, mysql_real_escape_string($val));

                    }else{

                        $this->db->like($key, NULL, FALSE);

                    }

                }

            }

        }

        $i = $this->db->get('ds_cuti');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }

    function get_jumlah_cuti($data){
        $this->db->select('*');
        $this->db->where('id_user', mysql_real_escape_string($data));
        $i = $this->db->get('ds_jumlah_cuti', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }

    function update_jumlah_cuti($data,$id=0)
    {
        $this->db->where('id_user', mysql_real_escape_string($id));
        $this->db->update('ds_jumlah_cuti', $data);
    }

    function get_cuti_all($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5){

        $this->db->select('ds_cuti.*, ds_users.name');

        $this->db->order_by('id','desc');



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

        if($search != null){

            if(count($search)){

                foreach ($search as $key=>$val){

                    if(!empty ($val)){

                        $this->db->like($key, mysql_real_escape_string($val));

                    }else{

                        $this->db->like($key, NULL, FALSE);

                    }

                }

            }

        }

        /*if($search != null){
            $this->db->like('ds_users.name',$search);
        }*/
        

        $this->db->join('ds_users', 'ds_cuti.id_user = ds_users.id');

        $i = $this->db->get('ds_cuti');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }



    function update_status($data,$id=0)

    {

        $this->db->where('id', mysql_real_escape_string($id));

        $this->db->update('ds_cuti', $data);

    }

    function add_jumlah_cuti($data){
        $this->db->update('ds_jumlah_cuti',$data);
    }

}