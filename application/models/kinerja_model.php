<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Kinerja_model extends MY_Model
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
	public function insert_kinerja()
	{
		$data=array(
			'unit'=>$this->input->post('unit'),
			'uraian'=>$this->input->post('uraian'),
			'program'=>$this->input->post('program'),
			'pagu'=>$this->input->post('pagu'),
			'realisasi'=>$this->input->post('realisasi'),
			'tahun'=>$this->input->post('tahun')
		);
		$query=$this->db->insert('sasaran',$data);
		return $query;
	}
	public function update_kinerja($id)
	{
		$data=array(
			'uraian'=>$this->input->post('uraian'),
			'program'=>$this->input->post('program'),
			'pagu'=>$this->input->post('pagu'),
			'realisasi'=>$this->input->post('realisasi'),
			'tahun'=>$this->input->post('tahun')
		);
		$this->db->where('id',$id);
		$query=$this->db->update('sasaran',$data);
		return $query;
	}
	public function update_indikator($id)
	{
		$data=array(
			'uraian'=>$this->input->post('uraian'),
			'target'=>$this->input->post('target'),
			'satuan'=>$this->input->post('pagu'),
			'realisasi'=>$this->input->post('realisasi')
			
		);
		$this->db->where('id',$id);
		$query=$this->db->update('indikator',$data);
		return $query;
	}
	public function indikator_where($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('indikator');
		return $query;
	}
	public function delete_indikator($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('indikator'); 
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
	
	
}
?>