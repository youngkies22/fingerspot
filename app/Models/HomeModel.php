<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
	public function getUser(){

    return $this->db->table("pegawai")->get()->getResult() ;

  }
  

}