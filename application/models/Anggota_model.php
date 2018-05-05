<?php
	class Anggota_model extends CI_Model{
		var $table = 'kontrakan';

		public function dataAnggota(){
			$query = $this->db->get("tb_anggota");	
			return $query;			
		}
		
		public function hapus($id){
			$this->db->where('anggota_id',$id);
			$this->db->delete('tb_anggota');
		}
		
	}
?>