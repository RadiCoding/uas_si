<?php
namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table = 'penilaian';  // Nama tabel di database
    protected $primaryKey = 'id_penilaian';  // Primary key tabel
    protected $allowedFields = ['mahasiswa_id', 'kode_kriteria', 'nilai'];  // Kolom yang dapat diisi
    protected $useTimestamps = false;  // Nonaktifkan penggunaan timestamp

    public function getPenilaian()
    {
        return $this->findAll(); // Ambil semua data penilaian
    }
}


