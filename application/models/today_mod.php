<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Today_mod extends CI_Model {



    function Today_mod()

    {

        parent::__construct();

    }

    

    function get($user_id=0,$punch_date = '')

    {

        $this->db->select('*');

        $this->db->where('punch_date', mysql_real_escape_string($punch_date));

        $this->db->where('user_id', mysql_real_escape_string($user_id));
        
        $this->db->where('report_cuti', NULL);

        

        $i = $this->db->get('ds_today', 1, 0);



        return $var = ($i->num_rows() > 0) ? $i->row() : false;

    }



    function add($data=null)

    {

        $return = 0;

        if($data != null){

            $this->db->insert('ds_today',$data);



            $return = $this->db->insert_id();

        }



        return $return;

    }

    function add_last($data=null)

    {

        $return = 0;

        if($data != null){

            $this->db->where('id', user_id());
            $this->db->update('ds_users', $data);



            $return = $this->db->insert_id();

        }



        return $return;

    }



    function update($data,$id=0)

    {

        $this->db->where('id',  mysql_real_escape_string($id));

        $this->db->update('ds_today', $data);

    }

    function update_last1($data)

    {

        $this->db->where('id', user_id());
        $this->db->update('ds_users', $data);

    }

    function update_last($data)

    {

        $this->db->where('id', user_id());
        $this->db->update('ds_users', $data);

    }

    

    function get_today($rows=false,$where=null,$limit=false,$skip=0,$take=10,$sort=false)

    {

        $this->db->select("*");

        if($sort){

            $this->db->order_by($sort['field'],$sort['sort']);

        }else{

            $this->db->order_by('punch_date','desc');

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



        $i = $this->db->get('ds_today');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }

    function getWork($user_id, $workStatus, $yeartMonth){
        $result = $this->db->query("SELECT COUNT(*) FROM `ds_today` where `user_id` = '".$user_id."' AND `punch_work` = '".$workStatus."' AND `created` like '".$yeartMonth."-%'")->row_array();
        if($result)
            return $result["COUNT(*)"];
        else
            return 0;
    }

    function getAbsenByDate($user_id, $yeartMonth){
        $result = $this->db->query("SELECT COUNT(*) FROM `ds_today` where `user_id` = '".$user_id."' AND `created` like '".$yeartMonth."-%'")->row_array();
        if($result)
            return $result["COUNT(*)"];
        else
            return 0;
    }

    function get_absen($rows=false,$where=null,$limit=false,$skip=0,$take=10)

    {

        $this->db->select("*");

        $this->db->order_by('punch_date','desc');



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

        //$this->db->join('ds_admins', 'register.created_by = ds_admins.id','left');

        $i = $this->db->get('ds_today');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }


    function get_absen_all($search=null,$rows=false,$where=null,$limit=false,$skip=0,$take=10)

    {

        $this->db->select("ds_today.*,ds_users.name");

        $this->db->order_by('punch_date','desc');
        
        $this->db->order_by('punch_in','asc');



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

        $this->db->join('ds_users', 'ds_today.user_id = ds_users.id');

        $i = $this->db->get('ds_today');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }

    }


    function add_absen_touser($data=null,$id=null){

        $this->db->where('id',  mysql_real_escape_string($id));

        $this->db->update('ds_users', $data);

    }

    function get_absen_onuser($rows=false,$where=null,$limit=false,$skip=0,$take=10){
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

        $i = $this->db->get('ds_users');



        if($rows){

            return $i->num_rows();

        }else{

            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;

        }
    }
    
    function add_tm($data=null){
        $return = 0;

        if($data != null){

            $this->db->insert('ds_today',$data);
            $return = $this->db->insert_id();

        }



        return $return;
    }
    function update_tm($data=null){
        $return = 0;

        if($data != null){
            $this->db->where('user_id', user_id());
            $this->db->update('ds_today', $data);


        }



        return $return;
    }

}