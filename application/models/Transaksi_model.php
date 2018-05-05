<?php
	class Transaksi_model extends CI_Model{
		var $table = 'kontrakan';

		public function dataTransaksi(){
			$query = $this->db->get("tb_transaksi");	
			return $query;			
		}
		public function transaksi(){
			$query = $this->db->get_where('tb_transaksi', ['status' => 'Pinjam']);	
			return $query;
		}
		public function dataBuku(){
			$query = $this->db->get("tb_buku");	
			return $query;			
		}
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