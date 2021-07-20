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
         ->select('id,pin,pegawai_nama,scan_date,inoutmode')
         ->join('pegawai','pegawai.pegawai_pin = att_log.pin')
         ->where('MONTH(scan_date)',$bulan)
         ->get();  
    }
  public function cekAbsenMasuk($tgl,$bulan,$pinPegawai)
    {
         return $this->db->table('att_log')
         ->where('DAY(scan_date)',$tgl)
         ->where('MONTH(scan_date)',$bulan)
         ->where('pin',$pinPegawai)
         ->where('inoutmode',1)
         ->get();  
    }
  public function cekAbsenPulang($tgl,$bulan,$pinPegawai)
    {
         return $this->db->table('att_log')
         ->where('inoutmode',2)
         ->where('DAY(scan_date)',$tgl)
         ->where('MONTH(scan_date)',$bulan)
         ->where('pin',$pinPegawai)
         ->get();  
    }

}