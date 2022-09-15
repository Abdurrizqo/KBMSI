<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Global.css">
    <!-- Custom CSS -->

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>kbmsi-full.ico" />
    <!-- Favicon -->

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        abu: '#E0DBD5',
                        hijau: '#405649',
                        orange: '#DF7833'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- Tailwind CSS -->



    <title>Keluarga Besar Mahasiswa Sistem Infromasi UB</title>
</head>

<body class="bg-abu">

    <nav class="fixed z-30 w-full flex flex-wrap items-center justify-between py-4 bg-abu text-hijau shadow-md navbar navbar-expand-lg navbar-light">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?php echo base_url(); ?>assets/img/Logo/lambang_KBMSI.png" alt="kbmsi" width="70">
            </a>

            <button class="navbar-toggler text-gray-500 border-0 py-2 px-2.5 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                </svg>
            </button>
            <div class="collapse navbar-collapse text-center text-xl" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
                    <li class="nav-item p-2 <?= ($this->uri->segment(1) == '' ? 'text-orange' : '') ?>">
                        <a class="nav-link hover:text-orange font-bold p-0" href="<?= base_url() ?>">HOME</a>
                    </li>
                    <li class="nav-item p-2 <?= ($this->uri->segment(1) == 'Kelembagaan' || $this->uri->segment(1) == 'kelembagaan' ? 'text-orange' : '') ?>">
                        <a class="nav-link hover:text-orange font-bold p-0" href="<?= base_url() ?>Kelembagaan">LEMBAGA</a>
                    </li>
                    <li class="nav-item p-2 <?= ($this->uri->segment(1) == 'Berita' ? 'text-orange' : '') ?>">
                        <a class="nav-link hover:text-orange font-bold p-0" href="<?= base_url() ?>Berita">BERITA</a>
                    </li>
                    <li class="nav-item p-2 <?= ($this->uri->segment(1) == 'Produk' ? 'text-orange' : '') ?>">
                        <a class="nav-link hover:text-orange font-bold p-0" href="<?= base_url() ?>Produk">PRODUK</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->


        </div>
    </nav>


    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 15);
        });
    </script>