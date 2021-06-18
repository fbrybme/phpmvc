<?php

class About extends Controller{
	public function index($nama='M Febri Hermansyah',$pekerjaan='Progammer',$umur=17){
		$data['nama']=$nama;
		$data['pekerjaan']=$pekerjaan;
		$data['usia']=$umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}