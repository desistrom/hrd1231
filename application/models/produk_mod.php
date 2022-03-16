<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_mod extends CI_Model{

	function Produk_mod()
	{
		parent::__construct();
	}
	function add($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_produk',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }
    function update($data,$id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->update('ds_produk', $data);
    }
    function get_produk($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("ds_produk.*,ds_kelompok_produk.nama_kelompok");
        $this->db->order_by('nama_produk','asc');

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
        $this->db->join('ds_kelompok_produk', 'ds_produk.id_kelompok = ds_kelompok_produk.id');
        $i = $this->db->get('ds_produk');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    function get($id=0)
    {
        $this->db->select('*');
        $this->db->where('id', mysql_real_escape_string($id));
        $i = $this->db->get('ds_produk', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }
    function delete($id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->delete('ds_produk');
    }
}