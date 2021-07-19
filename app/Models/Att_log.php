<?php

namespace App\Models;

use CodeIgniter\Model;

class Att_log extends Model
{

  protected $table = "att_log";
  protected $useTimestamps = false;

  protected $allowedFields = ['sn','scan_date','pin','verifymode','inoutmode','reserved','work_code'];


  public function getWhereAbsen($bulan)
    {
         return $this->db->table('att_log')
         ->select('pin,pegawai_nama,scan_date,inoutmode')
         ->join('pegawai','pegawai.pegawai_pin = att_log.pin')
         ->where('MONTH(scan_date)',$bulan)
         ->get();  
    }

}