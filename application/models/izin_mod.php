<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Izin_mod extends CI_Model {



    function izin_mod()

    {

        parent::__construct();

    }



    function add($data=null)

    {

        $return = 0;

        if($data != null){

            $this->db->insert('ds_izin',$data);



            $return = $this->db->insert_id();

        }



        return $return;

    }



    //EDIT DATA IZIN DARI TEAMLIST

    function add_izin_touser($data=null,$id=null){

        $this->db->where('id',  mysql_real_escape_string($id));

        $this->db->update('ds_users', $data);

    }

    //EDIT DATA IZIN DARI TEAMLIST



    function get_izin($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5)

    {

        $this->db->select("*");

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

        $i = $this->db->get('ds_izin');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }



    function get_izin_all($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5)

    {

        $this->db->select("ds_izin.*,ds_users.name");

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

        $this->db->join('ds_users', 'ds_izin.id_user = ds_users.id');

        $i = $this->db->get('ds_izin');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }



    function update_status($data,$id=0)

    {

        $this->db->where('id', mysql_real_escape_string($id));

        $this->db->update('ds_izin', $data);

    }

}