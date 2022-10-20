<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelbarang;
use App\Models\Modelkategori;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->barang=new Modelbarang();

    }
    public function index()
    {
        $data =[
            'tampildata'=> $this->barang->tampildata()

        ];
        return view('barang/viewbarang', $data);
    }
    public function tambah(){
        $modelkategori = new Modelkategori();
      
        $data =[
            'datakategori' => $modelkategori->findAll()

        ];
        return view('barang/formtambah', $data);
    }
}
