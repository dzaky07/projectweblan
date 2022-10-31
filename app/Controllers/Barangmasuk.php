<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelbarang;
use App\Models\Modeltempbarangmasuk;
use CodeIgniter\HTTP\Request;
use App\Models\Modeltempbarangmasuk;

class Barangmasuk extends BaseController
{
    public function index()
    {
        return view('barangmasuk/forminput');
    }

    function dataTemp()
    {
        if ($this->request->isAJAX()) {

    function dataTemp(){
        if($this->request->isAJAX()){
            $faktur = $this->request->getPost('faktur');

            $modelTemp = new Modeltempbarangmasuk();
            $data = [
                'datatemp' => $modelTemp->tampilDataTemp($faktur)
            ];

            $json = [
                'data' => view('barangmasuk/datatemp', $data)
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function ambilDataBarang()
    {
        if ($this->request->isAJAX()) {
            $kodebarang = $this->request->getPost('kodebarang');

            $modelBarang = new Modelbarang();
            $ambilData = $modelBarang->find($kodebarang);

            if ($ambilData == NULL) {
                $json = [
                    'error' => 'Data barang tidak ditemukan...'
                ];
            } else {
                $data = [
                    'namabarang' => $ambilData['brgnama'],
                    'hargajual' => $ambilData['brgharga']
                ];

                $json = [
                    'sukses' => $data
                ];
            }

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function simpanTemp()
    {
        if ($this->request->isAJAX()) {
            $faktur = $this->request->getPost('faktur');
            $hargajual = $this->request->getPost('hargajual');
            $hargabeli = $this->request->getPost('hargabeli');
            $kodebarang = $this->request->getPost('kodebarang');
            $jumlah = $this->request->getPost('jumlah');

            $modelTempBarang = new Modeltempbarangmasuk();

            $modelTempBarang->insert([
                'detfaktur' => $faktur,
                'detbrgkode' => $kodebarang,
                'dethargamasuk' => $hargabeli,
                'dethargajual' => $hargajual,
                'detjml' => $jumlah,
                'detsubtotal' => intval($jumlah) * intval($hargabeli)
            ]);

            $json = [
                'sukses' => 'Item berhasil ditambahkan'
            ];
            echo json_encode($json);
        } else {
                'data'=> view('barangmasuk/datatemp', $data)
            ];
            echo json_encode($json);
        }else{
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
