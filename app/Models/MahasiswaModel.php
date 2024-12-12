<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'alamat',]; // Kolom yang dapat diisi
    protected $validationRules = [
        'nama' => 'required|min_length[3]',
        'nim' => 'required|is_unique[mahasiswa.nim]',
        'alamat' => 'required|min_length[10]'
    ];

    public function countMahasiswa()
    {
        return $this->countAll();  // Menghitung jumlah seluruh data di tabel mahasiswa
    }
}
