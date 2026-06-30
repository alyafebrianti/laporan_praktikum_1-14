<?php
namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Artikel extends BaseController
{
    public function index()
    {
        $title  = 'Daftar Artikel';
        $model  = new ArtikelModel();
        $artikel = $model->getArtikelDenganKategori(); // Gunakan method join yang baru
        
        return view('artikel/index', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel (Admin)';
        $model = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        // Mengambil input pencarian, filter, dan halaman
        $q = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';
        
        // TUGAS 4: Parameter Sorting
        $sort_by = $this->request->getVar('sort_by') ?? 'id';
        $sort_order = $this->request->getVar('sort_order') ?? 'DESC';

        $builder = $model->select('artikel.*, kategori.nama_kategori')
                         ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

        if ($q != '') {
            $builder->like('artikel.judul', $q);
        }
        
        if ($kategori_id != '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

      
        $builder->orderBy('artikel.' . $sort_by, $sort_order);

      
        $artikel = $builder->paginate(5); 
        $pager = $model->pager;

        if ($this->request->isAJAX()) {
            return $this->response->setJSON([
                'artikel' => $artikel,
                'pager'   => [
                    'currentPage' => $pager->getCurrentPage(),
                    'pageCount'   => $pager->getPageCount()
                ]
            ]);
        }

        $data = [
            'title'       => $title,
            'kategori'    => $kategoriModel->findAll(),
        ];

        return view('artikel/admin_index', $data);
    }

    public function add()
    {
        // Validasi input dari form
        if ($this->request->getMethod() == 'POST' && $this->validate([
            'judul'       => 'required',
            'id_kategori' => 'required|integer'
        ])) {
            $model = new ArtikelModel();

            // --- PROSES UPLOAD GAMBAR ---
            // Mengambil file gambar dari form input [cite: 399]
            $file = $this->request->getFile('gambar');
            $namaFile = '';

            // Cek apakah ada file gambar yang diupload dan valid
            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Pindahkan file ke folder public/gambar [cite: 400]
                $file->move(ROOTPATH . 'public/gambar');
                // Ambil nama file yang baru saja diupload [cite: 410]
                $namaFile = $file->getName(); 
            }
            // ----------------------------

          
            $model->insert([
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'slug'        => url_title($this->request->getPost('judul'), '-', true),
                'id_kategori' => $this->request->getPost('id_kategori'), // Relasi dari Modul 6
                'gambar'      => $namaFile // Menyimpan nama gambar ke tabel database
            ]);
            return redirect()->to('/admin/artikel');
        } else {
            $kategoriModel = new KategoriModel();
            $data = [
                'title'    => 'Tambah Artikel',
                'kategori' => $kategoriModel->findAll()
            ];
            return view('artikel/form_add', $data);
        }
    }

   public function edit($id)
    {
        $model = new ArtikelModel();
        // Ambil data artikel yang lama terlebih dahulu
        $artikelLama = $model->find($id);

        if ($this->request->getMethod() == 'POST' && $this->validate([
            'judul'       => 'required',
            'id_kategori' => 'required|integer'
        ])) {
            
            // --- PROSES UPLOAD GAMBAR UNTUK EDIT ---
            $file = $this->request->getFile('gambar');
            $namaFile = $artikelLama['gambar']; // Default memakai nama gambar yang lama

            // Cek apakah pengguna mengunggah file gambar baru
            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Pindahkan file baru ke folder public/gambar-
                $file->move(ROOTPATH . 'public/gambar');
                $namaFile = $file->getName(); // Ambil nama file baru
                
                // Opsional: Hapus gambar lama dari server jika sebelumnya sudah ada gambar
                if (!empty($artikelLama['gambar']) && file_exists(ROOTPATH . 'public/gambar/' . $artikelLama['gambar'])) {
                    unlink(ROOTPATH . 'public/gambar/' . $artikelLama['gambar']);
                }
            }
            // ----------------------------------------

            // Update data ke database
            $model->update($id, [
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'gambar'      => $namaFile // Menyimpan nama file (baru atau tetap yang lama)
            ]);

            return redirect()->to('/admin/artikel');
        } else {
            $kategoriModel = new KategoriModel();
            $data = [
                'title'    => 'Edit Artikel',
                'artikel'  => $artikelLama,
                'kategori' => $kategoriModel->findAll()
            ];
            return view('artikel/form_edit', $data);
        }
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return redirect()->to('/admin/artikel');
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        
        // Modifikasi khusus untuk menjawab TUGAS No. 2 (Menampilkan kategori di detail)
        $data['artikel'] = $model->select('artikel.*, kategori.nama_kategori')
                                 ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
                                 ->where('slug', $slug)
                                 ->first();

        if (empty($data['artikel'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan.');
        }

        $data['title'] = $data['artikel']['judul'];
        return view('artikel/detail', $data);
    }
}