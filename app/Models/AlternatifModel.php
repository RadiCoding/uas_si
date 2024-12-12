<?php

namespace App\Models;

use CodeIgniter\Model;

class Alternatifmodel extends Model
{
    // Nama tabel di database
    protected $table = 'alternatif';

    // Primary key tabel
    protected $primaryKey = 'id_alter';

    // Kolom-kolom yang dapat diisi melalui model
    protected $allowedFields = [
        'id_mahasiswa', // Foreign key ke tabel mahasiswa
        'C1',           // Foreign key ke tabel bobot
        'C2',           // Foreign key ke tabel bobot
        'C3',           // Foreign key ke tabel bobot
        'C4',           // Foreign key ke tabel bobot
        'C5'            // Foreign key ke tabel bobot
    ];

    public function getAlternatif()
{
    return $this->findAll(); // Mengambil semua data alternatif
}
    public function getMaxMinAlternatif()
    {
        $db = \Config\Database::connect();

        // Mengambil nilai maksimum dan minimum untuk C1, C2, C3, C4, dan C5
        $query = $db->table($this->table)
            ->select("MAX(C1) as max_C1, MIN(C1) as min_C1, 
                      MAX(C2) as max_C2, MIN(C2) as min_C2, 
                      MAX(C3) as max_C3, MIN(C3) as min_C3, 
                      MAX(C4) as max_C4, MIN(C4) as min_C4, 
                      MAX(C5) as max_C5, MIN(C5) as min_C5")
            ->get();

        return $query->getRowArray(); // Mengembalikan hasil sebagai array
    }
 // Hanya jika soft delete digunakan
}
