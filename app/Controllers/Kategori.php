<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelkategori;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->kategori = new Modelkategori();
    }
    public function index()
    {
        $tombolcari = $this->request->getPost('tombolcari');

        if(isset($tombolcari)){
            $cari = $this->request->getPost('cari');
            session()->set('cari_kategori', $cari);
            redirect()->to('/kategori/index');
        }else{
            $cari = session()->get('cari_kategori');
        }

        $dataKategori = $cari ? $this->kategori->cariData($cari)->paginate(5, 'kategori') : $this->kategori->paginate(5, 'kategori');

        $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'tampildata' => $dataKategori,
            'pager' => $this->kategori->pager,
            'nohalaman' => $nohalaman,
            'cari' => $cari
        ];
        return view('kategori/viewkategori', $data);
    }

    public function formtambah()
    {
        return view('kategori/formtambah');
    }

    public function simpandata()
    {
        $namakategori = $this->request->getVar('namakategori');

        $validation = \config\Services::validation();

        $valid = $this->validate([
            'namakategori' => [
                'rules' => 'required',
                'label' => 'Nama Kategori',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'errorNamaKategori' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/formtambah');
        }else{
            $this->kategori->insert([
                'katnama' => $namakategori
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success">Data Berhasil ditambahkan...</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        }
    }
    public function formedit($id){
        $rowData = $this->kategori->find($id);
        if($rowData){

            $data =[
                'id' => $id,
                'nama' => $rowData['katnama']
            ];

            return view('kategori/formedit', $data);

        }else{
            exit('Data tidak ditemukan');
        }
    }
    public function updatedata(){
        $idkategori = $this->request->getVar('idkategori');
        $namakategori = $this->request->getVar('namakategori');

        $validation = \config\Services::validation();

        $valid = $this->validate([
            'namakategori' => [
                'rules' => 'required',
                'label' => 'Nama Kategori',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'errorNamaKategori' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/formedit/' .$idkategori);
        }else{
            $this->kategori->update($idkategori,[
                'katnama' => $namakategori
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success">Data Berhasil diedit...</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        }
    }
    public function hapus($id){
        $rowData = $this->kategori->find($id);
        if($rowData){
            $this->kategori->delete($id);
            $pesan = [
                'sukses' => '<div class="alert alert-success">Data Berhasil dihapus...</div>'
            ];

          
            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index/');
            

        }else{
            exit('Data tidak ditemukan');
            
        }
    }
} 