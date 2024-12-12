<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'kriteria'; // Nama tabel kriteria
    protected $primaryKey = 'id_kriteria'; // Primary key tabel
    protected $allowedFields = ['kode_kriteria','nama', 'bobot', 'sifat']; // Fields yang boleh diubah
    protected $returnType = 'array'; // Kembalikan data dalam bentuk array
}
