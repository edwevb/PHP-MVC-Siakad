<?php

class About extends Controller
{
    public function index()
    {
    	$data['judul'] = 'About';
    	$data['nama'] = 'Edward';
    	$this->view('layouts/header',$data);
 			$this->view('about/index',$data);
 			$this->view('layouts/footer');
    }
}
