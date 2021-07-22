<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/R.png');?>">
</head>
<body>
    <div id="container">
    <header>
    <h1>Iuran RT Desa Pasir Gombong</h1>
    </header>
    <navbar>
        <a href="<?= base_url('/warga');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/iuran');?>">Iuran</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
        <a href="<?= base_url('/admin/warga');?>">Admin</a>
    </navbar>
    <section id="wrapper">
        <section id="main">
