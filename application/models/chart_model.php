<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Chart_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		// $this->table_name = 'laporan';
		// $this->primary_key = 'tahun';
	}
	// Relations with other table
	public function sasaran()
	{
		$query=$this->db->query("select a.*,b.nama as unit,b.id as id_unit,b.singkatan from sasaran a,unit b where a.unit=b.id order by a.unit asc");
		return $query;
	}
	public function sasaran_id($id)
	{
		$query=$this->db->query("select a.*,b.nama as unit,b.id as id_unit,b.singkatan from sasaran a,unit b where a.unit=b.id and a.id='".$id."' order by a.unit asc");
		return $query;
	}
	public function indikator($id)
	{
		$this->db->where('sasaran',$id);
		$query=$this->db->get('indikator');
		return $query;
	}
	public function insert_indikator($id)
	{
		$count=count($_POST['uraian']);
		
			for($i=0;$i<$count;$i++){
				if($_POST['uraian'][$i]!=null){
					$this->db->query("insert indikator (uraian,target,satuan,realisasi,sasaran) values('".$_POST['uraian'][$i]."','".$_POST['target'][$i]."','".$_POST['satuan'][$i]."','".$_POST['realisasi'][$i]."','".$id."') ");	
				}
			}
		//return $query;
	}
	
	public function unit(){
		$query=$this->db->query("select id,nama from unit order by nama asc");
		return $query;
	}
	
	public function filter_unit($unitye){
		$sql= $this->db->query("SELECT a. * , b.nama AS unit, b.id AS id_unit, b.singkatan FROM sasaran a, unit b WHERE a.unit = b.id AND b.nama = '$unitye' 
		ORDER BY a.tahun ASC LIMIT 0 , 30");
		return $sql;
	}
	
	
}
?>