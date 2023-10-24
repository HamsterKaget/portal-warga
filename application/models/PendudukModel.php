<?php 
class PendudukModel extends CI_Model {
	function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        // $query= $this->db->get($tabel);
        $query = $this->db->query(
			"SELECT p.*, bk.kd_blok, bk.nama_blok
			FROM penduduk AS p
			JOIN blok_kavling AS bk ON p.kd_blok = bk.kd_blok;"
		);
        return $query->result();
    }

	function GetKavling($tabel)
    {
        // $query= $this->db->get($tabel);
        $query = $this->db->query(
			"SELECT bk.kd_blok, bk.nama_blok
			FROM blok_kavling as bk"
		);
        return $query->result();
    }


    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    // function GetCariBuku($cari)
    // {
    //     $query = $this->db->query("Select * From tabel_buku where judul_buku like '%$cari%' ");
    //     return $query;
    // }
}
?>
