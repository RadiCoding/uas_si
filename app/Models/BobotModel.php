<?php
namespace App\Models;

use CodeIgniter\Model;

class BobotModel extends Model
{
    protected $table = 'bobot';
    protected $primaryKey = 'id_bobot'; // atau kolom yang sesuai
    protected $allowedFields = ['id_bobot', 'nama_kriteria', 'nama_bobot', 'nilai_bobot'];
    protected $useTimestamps = true;

    public function update_bobot($nama_kriteria, $nama_bobot, $nilai_bobot)
    {
        return $this->update(
            ['nama_kriteria' => $nama_kriteria],
            ['nama_bobot' => $nama_bobot, 'nilai_bobot' => $nilai_bobot]
        );
    }
}
