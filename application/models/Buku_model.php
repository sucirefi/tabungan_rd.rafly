<?php
	class Buku_model extends CI_Model{
		var $table = 'buku';

		public function dataBuku(){
			$query = $this->db->get("tb_buku");	
			return $query;			
		}

		public function hapus($id){
			$this->db->where('buku_id',$id);
			$this->db->delete('tb_buku');
		}
		
	}
?>