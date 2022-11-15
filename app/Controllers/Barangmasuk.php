<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelbarang;
use App\Models\Modeltempbarangmasuk;
use App\Models\Modelbarangmasuk;
use App\Models\Modeldetailbarangmasuk;
use CodeIgniter\HTTP\Request;

class Barangmasuk extends BaseController
{
    public function index()
    {
        return view('barangmasuk/forminput');
    }

    function dataTemp()
    {
        if ($this->request->isAJAX()) {
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
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('id');

            $modelTempBarang = new Modeltempbarangmasuk();
            $modelTempBarang->delete($id);

            $json = [
                'sukses' => 'Item berhasil dihapus'
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function cariDataBarang()
    {
        if ($this->request->isAJAX()) {
            $json = [
                'data' => view('barangmasuk/modalcaribarang')
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function detailCariBarang()
    {
        if ($this->request->isAJAX()) {
            $cari = $this->request->getPost('cari');

            $modalBarang = new Modelbarang();

            $data = $modalBarang->tampildata_cari($cari)->get();

            if($data != null){
                $json = [
                    'data' => view('barangmasuk/detaildatabarang', [
                        'tampildata' => $data
                    ])
                ];

                echo json_encode($json);
            }
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    function selesaiTransaksi(){
        if ($this->request->isAJAX()) {
            $faktur = $this->request->getPost('faktur');
            $tglfaktur = $this->request->getPost('tglfaktur');

            $modelTemp = new Modeltempbarangmasuk();
            $dataTemp = $modelTemp->getWhere(['detfaktur' => $faktur]);

            if($dataTemp->getNumRows() == 0){
                $json = [
                    'error' => 'Maaf, data item untuk faktur ini belum ada'
                ];
            }else{
                //Simpan ke tabel barang masuk
                $modalBarangMasuk = new Modelbarangmasuk();
                $totalSubTotal = 0;
                foreach($dataTemp->getResultArray() as $total):
                    $totalSubTotal += intval($total['detsubtotal']);
            endforeach;
            
            $modalBarangMasuk->insert([
                'faktur' => $faktur,
                'tglfaktur' => $tglfaktur,
                'totalharga' => $totalSubTotal
            ]);
            //Simpan ke Tabel detail barang masuk
            $modelDetailBarangMasuk = new Modeldetailbarangmasuk();
            foreach($dataTemp->getResultArray() as $row):
               $modelDetailBarangMasuk->insert([
                'detfaktur' => $row['detfaktur'],
                'detbrgkode' => $row['detbrgkode'],
                'dethargamasuk' => $row['dethargamasuk'],
                'detjml' => $row['detjml'],
                'detsubtotal' => $row['detsubtotal'],
               ]);
        endforeach;

        //Hapus data yang ada ditabel temp 
        $modelTemp->emptyTable();

            $json = [
                'sukses' => 'Transaksi Berhasil disimpan'
            ];
        }

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }

    public function data(){
        $tombolcari = $this->request->getPost('tombolcari');

        if(isset($tombolcari)){
            $cari = $this->request->getPost('cari');
            session()->set('cari_faktur', $cari);
            redirect()->to('/barangmasuk/data');
        }else{
            $cari = session()->get('cari_faktur');
        }

        $modelBarangMasuk = new Modelbarangmasuk();

        $totaldata = $cari ? $modelBarangMasuk->tampildata_cari($cari)->countAllResults() : $modelBarangMasuk->countAllResults();
        
        $dataBarangmasuk = $cari ? $modelBarangMasuk->tampildata_cari($cari)->paginate(10, 'barangmasuk') : $modelBarangMasuk->paginate(10, 'barangmasuk');

        $nohalaman = $this->request->getVar('page_barangmasuk') ? $this->request->getVar('page_barangmasuk') : 1;
        $data = [
            'tampildata' => $dataBarangmasuk,
            'pager' => $modelBarangMasuk->pager,
            'nohalaman' => $nohalaman,
            'totaldata' => $totaldata,
            'cari' => $cari,
        ];

        return view('barangmasuk/viewdata', $data);
    }
}
