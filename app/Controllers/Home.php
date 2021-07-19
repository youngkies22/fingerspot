<?php

namespace App\Controllers;
use CodeIgniter\Conttroller;
use App\Models\HomeModel;
use App\Models\Att_log;

class Home extends BaseController
{
	protected $log;

	public function __construct(){
		$this->log = new Att_log();
	}


	public function index()
	{
		$data = [
			'title' => 'Halaman Home',
			'isi'		=> 'home',
		];
		echo view('layout/wrapper',$data);

	}
	public function pegawai()
	{
		$model = new HomeModel();
		$data = [
			'title' => 'Halaman Home',
			'isi'		=> 'data_pegawai',
			'data'	=> $model->getUser(),
		];
		echo view('layout/wrapper',$data);

	}
	public function absen()
	{
		$model = new HomeModel();
		$data = [
			'title' => 'Halaman Home',
			'isi'		=> 'absen',
			'data_pegawai'	=> $model->getUser(),
		];
		echo view('layout/wrapper',$data);

	}
	public function dataAbsen()
	{
		// $dataabsen = $this->log
		// ->where('MONTH(scan_date)',$bulan)
		// //->where("DATE_FORMAT(scan_date,'%Y-%m')", $bulan)
		// ->
		// ->join('pegawai', on)
		// ->get();
		
		$bulan=7;
		
		$dataabsen = $this->log->getWhereAbsen($bulan);
		$data = [
			'title' => 'Halaman Home',
			'isi'		=> 'data_absen',
			'data'	=> $dataabsen->getResult(),
		];
		echo view('layout/wrapper',$data);

	}
//--------------------------------------------------------------------------
public function saveAbsenMasuk(){


		
			$pinPegawai = $this->request->getVar('nama');
			$jam = $this->request->getVar('jam');
			$tanggal = date("Y-m-d",strtotime($this->request->getVar('tanggal')));
			$sn = "FIO66208020150657";

			$timestamp = $tanggal.' '.$jam;

		if(empty($pinPegawai)){
			session()->setFlashdata('error','Harap Pilih Pegawai');
			return redirect()->back()->withInput();
		}
		else{
			$array = [
				'sn'					=> $sn,
				'scan_date'		=> $timestamp,
				'pin'					=>$pinPegawai,
				'verifymode'	=>20,
				'inoutmode'		=>1, // masuk
				'reserved'		=>0,
				'work_code'		=>0,
				
			];
		 $data = 	$this->log->save($array);
			if($data){
				session()->setFlashdata('success','Data Absen Masuk Berhasil Tambah');
			}
			else{

			}
			return redirect()->back()->withInput();
			
		}
		



	
	
	
}
public function saveAbsenPulang(){

	
			$pinPegawai = $this->request->getVar('nama1');
			$jam = $this->request->getVar('jam1');
			$tanggal = date("Y-m-d",strtotime($this->request->getVar('tanggal1')));
			$sn = "FIO66208020150657";

			$timestamp = $tanggal.' '.$jam;

		if(empty($pinPegawai)){
			session()->setFlashdata('error','Harap Pilih Pegawai');
			return redirect()->back()->withInput();
		}
		else{
			$array = [
				'sn'					=> $sn,
				'scan_date'		=> $timestamp,
				'pin'					=> $pinPegawai,
				'verifymode'	=>20,
				'inoutmode'		=>2, // masuk
				'reserved'		=>0,
				'work_code'		=>0,
				
			];
		 $data = 	$this->log->save($array);
			if($data){
				session()->setFlashdata('success','Data Absen Pulang Berhasil Tambah');
			}
			else{

			}
			return redirect()->back()->withInput();
			
		}
		



	
	
	
}

}
