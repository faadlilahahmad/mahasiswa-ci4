<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    public function list()
    {
        $mhs = new MahasiswaModel();
        if ($this->request->getGet('keyword')) {

            $keyword = $this->request->getGet('keyword');

            $data['mahasiswas'] = $mhs->like('id', $keyword)->findAll();
        } else {

            $data['mahasiswas'] = $mhs->findAll();
        }

        return view('list', $data);
    }

    public function edit($id = null)
    {
        $mhs = new MahasiswaModel();
        $data['mahasiswa'] = $mhs->find($id);
        return view('edit', $data);
    }

    public function update($id = null)
    {
        $mhs = new MahasiswaModel();
        $data = [
            'tt' => $this->request->getPost('tt'),
            'tm' => $this->request->getPost('tm'),
            'uts' => $this->request->getPost('uts'),
            'uas' => $this->request->getPost('uas'),
            'na' => (($this->request->getPost('tt') * 0.20) + ($this->request->getPost('tm') * 0.20) + ($this->request->getPost('uts') * 0.20) + ($this->request->getPost('uas') * 0.40)),
        ];

        $mhs->update($id, $data);

        return redirect()->to(base_url('list'));
    }
}
