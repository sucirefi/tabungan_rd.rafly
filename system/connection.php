<?php 
/*
*
*
*/
class Connection {

	//function koneksi
	public function db(){
		
		//koneksi database

		$koneksi=mysqli_connect("localhost","root","","db_perpus");

		return $koneksi;
	}


	//function query [untuk dml]
	public function run($query){

		//run query

		$run=mysqli_query($this->db(),$query);

		return $run;
	}


	//funtion array data [menampilkan data]
	public function get($run){

		//fetch array

		$get=mysqli_fetch_array($run);

		return $get;
	}


	//function num rows[menghitung baris]
	public function rows($run){

		$rows=mysqli_num_rows($run);

		return $rows;
	}





}


 ?>