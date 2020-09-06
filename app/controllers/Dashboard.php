<?php

class Dashboard extends Controller
{
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['mhs'] = $this->model('MahasiswaModel')->getMahasiswas();
		$this->view('layouts/header',$data);
		$this->view('home/dashboard/dashboard',$data);
		$this->view('layouts/footer');
	}

	public function detailMahasiswa($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('MahasiswaModel')->getMahasiswa($id);
		$this->view('layouts/header',$data);
		$this->view('home/dashboard/mahasiswa/detail',$data);
		$this->view('layouts/footer');
	}
}
