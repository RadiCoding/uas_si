<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/input-mahasiswa', 'Home::inputMahasiswa');
$routes->post('/tambah-mahasiswa', 'Home::tambahMahasiswa');
$routes->get('/daftar-mahasiswa', 'Home::daftarMahasiswa');
$routes->get('home/edit-mahasiswa/(:num)', 'Home::editMahasiswa/$1');
$routes->post('home/update-mahasiswa/(:num)', 'Home::updateMahasiswa/$1');
$routes->get('home/hapusMahasiswa/(:num)', 'Home::hapusMahasiswa/$1');
$routes->get('home/daftarMahasiswa', 'Home::daftarMahasiswa');



$routes->get('/input-kriteria', 'Home::inputKriteria');
$routes->post('/tambah-kriteria', 'Home::tambahKriteria');
$routes->get('/daftar-kriteria', 'Home::daftarKriteria');
$routes->get('home/edit-kriteria/(:num)', 'Home ::editKriteria/$1');


$routes->get('/input-penilaian', 'Home::inputPenilaian');
$routes->post('/tambah-penilaian', 'Home::tambahPenilaian');
$routes->get('/daftar-penilaian', 'Home::daftarPenilaian');

$routes->get('/input-bobot', 'Home::inputBobot');
$routes->post('/tambah-bobot', 'Home::tambahBobot');
$routes->get('/daftar-bobot', 'Home::daftarBobot');
$routes->get('home/edit-kriteria/(:num)', 'Home::editKriteria/$1');




$routes->get('input-alternatif', 'Home::inputAlternatif');
$routes->post('tambah-alternatif', 'Home::tambahAlternatif');
$routes->get('/daftar-alternatif', 'Home::daftarAlternatif');
$routes->get('/nilai-bobot', 'Home::nilaiBobot');

$routes->get('/daftar-MaxMin', 'Home::DaftarMaxMin');
$routes->get('/daftar-normalisasi', 'Home::daftarNormalisasi');
$routes->get('Home/hitungRanking', 'Home::DaftarRanking');



$routes->get('/saw/home', 'Home::home');
$routes->get('hitung-saw', 'Home::hitungSAW');
$routes->get('/normalisasi', 'Home::normalisasi');










