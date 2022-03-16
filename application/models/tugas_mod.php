<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Tugas_mod extends CI_Model {



    function tugas_mod()

    {

        parent::__construct();

    }



    function add($data=null)

    {

        $return = 0;

        if($data != null){

            $this->db->insert('ds_tugas',$data);



            $return = $this->db->insert_id();

        }



        return $return;

    }



    //EDIT DATA tugas DARI TEAMLIST

    function add_tugas_touser($data=null,$id=null){

        $this->db->where('id',  mysql_real_escape_string($id));

        $this->db->update('ds_users', $data);

    }

    //EDIT DATA tugas DARI TEAMLIST



    function get_tugas($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5)

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

        $i = $this->db->get('ds_tugas');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }



    function get_tugas_all($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=5)

    {

        $this->db->select("ds_tugas.*,ds_users.name");

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

        $this->db->join('ds_users', 'ds_tugas.id_user = ds_users.id');

        $i = $this->db->get('ds_tugas');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }



    function update_status($data,$id=0)

    {

        $this->db->where('id', mysql_real_escape_string($id));

        $this->db->update('ds_tugas', $data);

    }

}