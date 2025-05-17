<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Journey;
use CodeIgniter\HTTP\ResponseInterface;

class OneController extends BaseController
{
    protected $Journey;

    public function __construct()
    {
        $this->Journey = new Journey();
    }

    public function index()
    {
       $list = $this->Journey->where()->findAll();
    }

    public function listContent()
    {
        #DATA ARRAY DENGAN MENGGUNAKAN KEY VALUE
        /*$data['list_data'] = [
            [
                'visiting' => 'Hari ini libur nasional',
                'kategori' => 'Outlet'
            ],
            [
                'visiting' => 'Hari ini pertamina gratis',
                'kategori' => 'Outlet'
            ],
            [
                'visiting' => 'Informasi Mahasiswa',
                'kategori' => 'Outlet'
            ]
        ];*/

        #CALL DATA FROM QUERY
        $contents = new Journey();
        $data['list_data'] = $contents->orderBy('tanggal', 'desc')->findAll();

        #DATA ARRAY TANPA KEY
        $data['list_category'] = ['Outlet', 'Distributor', 'Warehouse'];

        #BAGIAN UNTUK SUBMIT BERITA
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'tujuan'   => 'required|max_length[50]',
            ];
            $messages = [
                'tujuan' => [
                    'required' => 'Harus diisi',
                    'max' => 'Maksimal 50 karakter'
                ]
                ];
            if ($this->validate($rules, $messages)) {
                $data_contents = [
                    'tujuan' => $this->request->getPost('tujuan'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'tanggal' => date('Y-m-d'),
                ];
                $is_saved = $contents->insert($data_contents);
                if ($is_saved) {
                    return redirect('tujuan');
                }
            } else {
                $data['validation'] = $this->validator;
                return view('project/One', $data);
            }
            
            
        }

        return view('project/One', $data);
    }

    public function kategori()
    {
        $data['getkategori'] = null;
        if ($this->request->getGet('kategori')) {
            $data['getkategori'] = $this->request->getGet('kategori');
        }

        return view('project/kategori', $data);
    }

    public function deleteVisiting($id)
    {
        //delete
        $contents = new Journey();
        $contents->delete($id);
        return redirect('tujuan');
    }

    public function updateVisiting($id)
    {
        $contents = new Journey();
        $data['detail'] = $contents->where('id', $id)->first();

        #VALIDASI JIKA ADA METHOD POST ACTIVE
        if ($this->request->getMethod() == 'POST') {
            $deskripsi = $this->request->getPost('deskripsi');
            $data_contents = [
                'tujuan' => $this->request->getPost('visiting'),
                'deskripsi' => $deskripsi
            ];
            #UPDATE penjualan SET FIELD = '' WHERE ID = '';
            $is_saved = $contents->update($id, $data_contents);
            if ($is_saved) {
                return redirect('tujuan');
            }
        }

        return view('project/edit_sample', $data);
    }

    public function detailVisiting($id)
{
    $contents = new Journey();
    $data['detail'] = $contents->find($id);

    if (!$data['detail']) {
        // Optional: redirect atau tampilkan halaman error jika data tidak ditemukan
        return redirect()->to('tujuan')->with('error', 'Data tidak ditemukan.');
    }

    return view('project/detail_sample', $data);
}

    
}
