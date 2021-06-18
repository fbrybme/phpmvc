<?php

class Siswa extends Controller
{
	public function index()
	{
		$data['judul'] = 'Daftar Siswa';
		$data['sw'] = $this->model('Siswa_model')->getAllSiswa();
		$this->view('templates/header', $data);
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Siswa';
		$data['sw'] = $this->model('Siswa_model')->getSiswaId($id);
		$this->view('templates/header', $data);
		$this->view('siswa/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
			header('Location: ' . base_url . '/siswa');
			exit;
		} else {
			Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
			header('Location: ' . base_url . '/siswa');
			exit;
		}
	}
	public function hapus($id)
	{ {
			if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
				Flasher::setFlash('Berhasil', 'dihapus', 'success');
				header('Location: ' . base_url . '/siswa');
				exit;
			} else {
				Flasher::setFlash('Gagal', 'dihapus', 'danger');
				header('Location: ' . base_url . '/siswa');
				exit;
			}
		}
	}
	public function getubah()
	{
		echo json_encode($this->model('Siswa_model')->getSiswaId($_POST['id']));
	}

	public function ubah()
	{
		if ($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil', 'diubah', 'success');
			header('Location: ' . base_url . '/siswa');
			exit;
		} else {
			Flasher::setFlash('Gagal', 'diubah', 'danger');
			header('Location: ' . base_url . '/siswa');
			exit;
		}
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Siswa';
		$data['sw'] = $this->model('Siswa_model')->cariDataSiswa();
		$this->view('templates/header', $data);
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}

	public function hapusDatainp()
	{
		if ($this->model('Triger_input')->hapusDataInput($_POST) > 0) {
			Flasher::setFlash('Triger Input Berhasil', 'dibersihkan', 'success');
			header('Location: ' . base_url . '/siswa');
			exit;
		} else {
			Flasher::setFlash('Triger Input Gagal', 'dibersihkan', 'danger');
			header('Location: ' . base_url . '/siswa');
			exit;
		}
	}

	public function hapusDataupt()
	{
		if ($this->model('Triger_update')->hapusDataUpdate($_POST) > 0) {
			Flasher::setFlash('Triger Update Berhasil', 'dibersihkan', 'success');
			header('Location: ' . base_url . '/siswa');
			exit;
		} else {
			Flasher::setFlash('Triger Update Gagal', 'dibersihkan', 'danger');
			header('Location: ' . base_url . '/siswa');
			exit;
		}
	}

	public function hapusDatadl()
	{
		if ($this->model('Triger_del')->hapusDataDelete($_POST) > 0) {
			Flasher::setFlash('Triger Delete() Berhasil', 'dibersihkan', 'success');
			header('Location: ' . base_url . '/siswa');
			exit;
		} else {
			Flasher::setFlash('Triger Delete Gagal', 'dibersihkan', 'danger');
			header('Location: ' . base_url . '/siswa');
			exit;
		}
	}
}
