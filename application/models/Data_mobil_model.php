<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_mobil_model extends CI_Model
{

    public $table = 'data_mobil';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('idPemilik', $q);
	$this->db->or_like('jenismobil', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('tramisi', $q);
	$this->db->or_like('warna', $q);
	$this->db->or_like('foto_luar', $q);
	$this->db->or_like('nostnk', $q);
	$this->db->or_like('nopolisi', $q);
	$this->db->or_like('asuransi', $q);
	$this->db->or_like('foto_dalam', $q);
	$this->db->or_like('harga_dalam', $q);
	$this->db->or_like('harga_sewadalam', $q);
	$this->db->or_like('harga_sewaluar', $q);
	$this->db->or_like('harga_luar', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('ket', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('idPemilik', $q);
	$this->db->or_like('jenismobil', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('tramisi', $q);
	$this->db->or_like('warna', $q);
	$this->db->or_like('foto_luar', $q);
	$this->db->or_like('nostnk', $q);
	$this->db->or_like('nopolisi', $q);
	$this->db->or_like('asuransi', $q);
	$this->db->or_like('foto_dalam', $q);
	$this->db->or_like('harga_dalam', $q);
	$this->db->or_like('harga_sewadalam', $q);
	$this->db->or_like('harga_sewaluar', $q);
	$this->db->or_like('harga_luar', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('ket', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Data_mobil_model.php */
/* Location: ./application/models/Data_mobil_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-09 14:47:54 */
/* http://harviacode.com */