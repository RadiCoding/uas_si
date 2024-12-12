<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\KriteriaModel;
use App\Models\BobotModel;
use App\Models\Alternatifmodel;

class Home extends BaseController
{
    protected $kriteriaModel;
    protected $alternatifModel;
    protected $kriteriamodel;
    

    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
    }
    // Halaman utama
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $kriteriaModel = new KriteriaModel();

        $data['mahasiswa'] = $mahasiswaModel->findAll();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['penilaian'] = $kriteriaModel->findAll();

        $data['total_mahasiswa'] = count($data['mahasiswa']) ?: 0;
        $data['total_kriteria'] = count($data['kriteria']) ?: 0; 
        
        echo view('admin_header');
        echo view('admin_nav');
        echo view('dashboard/content', $data);
        echo view('admin_footer');

    }

    public function inputMahasiswa()
    {
        $data['page_title'] = 'Input Mahasiswa';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/form_input_mahasiswa', $data); 
        echo view('admin_footer');
    }

    public function tambahMahasiswa()
    {
        // Validasi input
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'nim' => 'required|is_unique[mahasiswa.nim]',
            'alamat' => 'required|min_length[10]'
        ])) {
            return redirect()->to('/input-mahasiswa')->withInput()->with('errors', $this->validator->getErrors());
        }
    
        $model = new MahasiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->save($data);
        return redirect()->to('/input-mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function daftarMahasiswa()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        $data['page_title'] = 'Daftar Mahasiswa';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_mahasiswa', $data);
        echo view('admin_footer');
    }
    // Fungsi untuk menghapus data mahasiswa
    public function hapusMahasiswa($id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('mahasiswa');

    // Debugging - tampilkan query yang dijalankan
    $result = $builder->delete(['id' => $id]);
    
    if ($result) {
        return redirect()->to('/home/daftarMahasiswa')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect()->to('/home/daftarMahasiswa')->with('error', 'Gagal menghapus data.');
    }
}

    public function inputKriteria()
    {
        $data['page_title'] = 'Input Kriteria';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/form_input_kriteria', $data);
        echo view('admin_footer');
    }

    public function tambahKriteria()
    {
        if (!$this->validate([
            'nama' => 'required|min_length[3]',
            'bobot' => 'required|decimal',
            'sifat' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Form input tidak valid!');
        }

        $model = new KriteriaModel();
        $data = [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama' => $this->request->getPost('nama'),
            'bobot' => $this->request->getPost('bobot'),
            'sifat' => $this->request->getPost('sifat')
        ];

        $model->save($data);

        return redirect()->to('/input-kriteria')->with('success', 'Kriteria berhasil ditambahkan!');
    }

    public function daftarKriteria()
    {
        $model = new KriteriaModel();
        $data['kriteria'] = $model->findAll(); 

        $data['page_title'] = 'Daftar Kriteria';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_kriteria', $data);
        echo view('admin_footer');
    }
    public function editKriteria($id)
{
    // Memuat model KriteriaModel
    $model = new KriteriaModel();

    // Mengambil data kriteria berdasarkan ID
    $kriteria = $model->find($id);

    // Jika data kriteria tidak ditemukan, redirect ke daftar kriteria
    if (!$kriteria) {
        return redirect()->to('/daftar-kriteria')->with('error', 'Data kriteria tidak ditemukan.');
    }

    // Mengirimkan data kriteria ke view 'form_edit_kriteria'
    return view('content/edit_kriteria', [
        'page_title' => 'Edit Kriteria', // Judul halaman
        'kriteria' => $kriteria, // Data kriteria yang akan diedit
    ]);
}

    public function updateKriteria($id)
{
    $model = new KriteriaModel();

    // Validasi input
    if (!$this->validate([
        'kode_kriteria' => 'required|min_length[3]',
        'nama' => 'required|min_length[3]',
        'bobot' => 'required|numeric',
        'sifat' => 'required|in_list[Benefit,Cost]',
    ])) {
        return redirect()->to('/edit-kriteria/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    }

    // Data yang akan diupdate
    $data = [
        'kode_kriteria' => $this->request->getPost('kode_kriteria'),
        'nama' => $this->request->getPost('nama'),
        'bobot' => $this->request->getPost('bobot'),
        'sifat' => $this->request->getPost('sifat'),
    ];

    // Update data
    $model->update($id, $data);

    return redirect()->to('/daftar-kriteria')->with('success', 'Data kriteria berhasil diperbarui.');
}


    public function inputBobot()
    {
        $kriteriaModel = new KriteriaModel();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['page_title'] = 'Input Bobot';
        
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/form_input_bobot', $data);
        echo view('admin_footer');
    }
    public function tambahBobot()
    {
        if (!$this->validate([
            'nama_kriteria' => 'required',
            'nama_bobot' => 'required|min_length[3]',
            'nilai_bobot' => 'required|integer'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Form input tidak valid!');
        }

        $model = new BobotModel();
        $data = [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot')
        ];
        $model->save($data);
        return redirect()->to('/input-bobot')->with('success', 'Bobot berhasil ditambahkan!');
    }

    public function daftarBobot()
    {
        // Ambil data bobot dari model
        $model = new BobotModel();
        $data['bobot'] = $model->findAll();

        $data['page_title'] = 'Daftar Bobot';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_bobot', $data);
        echo view('admin_footer');
    }

    public function edit_bobot($nama_kriteria)
    {
        $bobot = $this->bobotModel->where('nama_kriteria', $nama_kriteria)->first();
    
        if (!$bobot) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Bobot dengan nama kriteria '{$nama_kriteria}' tidak ditemukan.");
        }
        return view('content/edit_bobot', ['bobot' => $bobot, 'page_title' => 'Edit Bobot']);
    }

    public function update_bobot()
    {
        $nama_kriteria = $this->request->getPost('nama_kriteria');
        $nama_bobot = $this->request->getPost('nama_bobot');
        $nilai_bobot = $this->request->getPost('nilai_bobot');

        $this->bobotModel->update(
            ['nama_kriteria' => $nama_kriteria],
            [
                'nama_bobot' => $nama_bobot,
                'nilai_bobot' => $nilai_bobot
            ]
        );  
        return redirect()->to('/daftar-bobot')->with('message', 'Bobot berhasil diperbarui');
    }   

    public function inputAlternatif()
    {
        $mahasiswaModel = new MahasiswaModel();
        $bobotModel = new BobotModel();

        $data = [
            'mahasiswa' => $mahasiswaModel->findAll(),
            'bobot' => $bobotModel->findAll(),
            'page_title' => 'Input Alternatif'
        ];

        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/form_input_alternatif', $data);
        echo view('admin_footer');
    }
    public function tambahAlternatif()
    {
        if (!$this->validate([
            'id_mahasiswa' => 'required|integer',
            'C1' => 'required|integer',
            'C2' => 'required|integer',
            'C3' => 'required|integer',
            'C4' => 'required|integer',
            'C5' => 'required|integer'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Form input tidak valid!');
        }

        $alternatifModel = new AlternatifModel();
        $data = [
            'id_mahasiswa' => $this->request->getPost('id_mahasiswa'),
            'C1' => $this->request->getPost('C1'),
            'C2' => $this->request->getPost('C2'),
            'C3' => $this->request->getPost('C3'),
            'C4' => $this->request->getPost('C4'),
            'C5' => $this->request->getPost('C5')
        ];

        $alternatifModel->save($data);
        return redirect()->to('/input-alternatif')->with('success', 'Alternatif berhasil ditambahkan!');
    }

    public function daftarAlternatif()
    {

        $model = new AlternatifModel();
        $data['alternatif'] = $model->findAll(); 

        $data['page_title'] = 'Daftar Alternatif';
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_alternatif', $data);
        echo view('admin_footer');
    }
    
    public function nilaiBobot()
    {
        $alternatifModel = new AlternatifModel();
        $alternatif = $alternatifModel->findAll();

        $maxValues = [];
        $minValues = [];
        $kriteriaKeys = ['C1', 'C2', 'C3', 'C4', 'C5'];

        foreach ($kriteriaKeys as $key) {
            $columnValues = array_column($alternatif, $key);
            $maxValues[$key] = !empty($columnValues) ? max($columnValues) : 0;
            $minValues[$key] = !empty($columnValues) ? min($columnValues) : 0;
        }
        return view('content/daftar_nilai_max-min', [
            'page_title' => 'Nilai Bobot Maksimum dan Minimum',
            'maxValues' => $maxValues,
            'minValues' => $minValues
        ]);
    }
    public function daftarMaxMin()
    {

        $alternatifModel = new AlternatifModel();
        $alternatif = $alternatifModel->getAlternatif();
        $maxMinValues = $alternatifModel->getMaxMinAlternatif();

        $data = [
            'page_title' => 'Daftar Alternatif',
            'alternatif' => $alternatif,
            'maxValues' => [
                'C1' => $maxMinValues['max_C1'],
                'C2' => $maxMinValues['max_C2'],
                'C3' => $maxMinValues['max_C3'],
                'C4' => $maxMinValues['max_C4'],
                'C5' => $maxMinValues['max_C5'],
            ],
            'minValues' => [
                'C1' => $maxMinValues['min_C1'],
                'C2' => $maxMinValues['min_C2'],
                'C3' => $maxMinValues['min_C3'],
                'C4' => $maxMinValues['min_C4'],
                'C5' => $maxMinValues['min_C5'],
            ]
        ];
        
        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_nilai_max-min', $data); 
        echo view('admin_footer');
    }

    public function HitungNormalisasi()
    {
        $alternatifModel = new Alternatifmodel();
        $kriteriaModel = new KriteriaModel();

        $alternatif = $alternatifModel->findAll();
        $kriteria = $kriteriaModel->findAll();

        $hasilNormalisasi = [];

        foreach ($kriteria as $k) {
            $kodeKriteria = $k['kode_kriteria'];
            $sifat = $k['sifat'];
        
            $nilaiKriteria = array_column($alternatif, $kodeKriteria);

            if (count($nilaiKriteria) > 0) {
                $nilaiMax = max($nilaiKriteria);
                $nilaiMin = min($nilaiKriteria);

                foreach ($alternatif as &$alt) {
                    $nilai = $alt[$kodeKriteria]; 

                    if ($sifat === 'benefit') {
                        $alt['normalisasi'][$kodeKriteria] = $nilaiMax != 0
                            ? $nilai / $nilaiMax
                            : 0;
                    } else { 
                        $alt['normalisasi'][$kodeKriteria] = $nilai != 0
                            ? $nilaiMin / $nilai
                            : 0;
                    }
                }
            }
        }

        return $alternatif;
    }

    public function daftarNormalisasi()
    {
        $normalisasi = $this->HitungNormalisasi(); 
        $kriteria = $this->kriteriaModel->findAll();

        $data = [
            'alternatif' => $normalisasi,
            'kriteria' => $kriteria,
            'page_title' => 'Hasil Normalisasi'
        ];

        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_normalisasi', $data);
        echo view('admin_footer');
    }

    public function HitungPreferensi()
    {
        $normalisasi = $this->HitungNormalisasi();
        $kriteria = $this->kriteriaModel->findAll(); 

        $preferensi = [];

        foreach ($normalisasi as $altKey => $alt) {
            $nilaiPreferensi = 0;

            foreach ($kriteria as $k) {
                $kodeKriteria = $k['kode_kriteria'];
                $bobot = $k['bobot'];

            
                if (isset($alt['normalisasi'][$kodeKriteria])) {
                    $nilaiPreferensi += $alt['normalisasi'][$kodeKriteria] * $bobot;
                }
            }
            $preferensi[] = [
                'id_alter' => $alt['id_alter'],
                'id_mahasiswa' => $alt['id_mahasiswa'],
                'nilai_preferensi' => round($nilaiPreferensi, 4)
            ];
        }

            usort($preferensi, function($a, $b) {
                return $a['id_mahasiswa'] <=> $b['id_mahasiswa'];
            });

            usort($preferensi, function($a, $b) {
                return $b['nilai_preferensi'] <=> $a['nilai_preferensi'];
            });

            foreach ($preferensi as $index => &$rank) {
                $rank['ranking'] = $index + 1; 
            }
            return $preferensi;
    }

    public function daftarRanking()
    {
        $preferensi = $this->HitungPreferensi();

        $data = [
            'preferensi' => $preferensi,
            'page_title' => 'Hasil Ranking'
        ];

        echo view('admin_header');
        echo view('admin_nav');
        echo view('content/daftar_ranking', $data); 
        echo view('admin_footer');
    }
    public function home()
    {
        return view('home'); 
    }
}
