<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= base_url; ?> /css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url; ?>">WEB PHPMVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="<?= base_url; ?>">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?= base_url; ?>/siswa">Siswa</a>
        <a class="nav-link" href="<?= base_url; ?>/about">About</a>
        <a class="nav-link" href="<?= base_url; ?>/M Febri Hermansyah">M Febri Hermansyah</a>
      </div>
    </div>
  </div>
</nav>