<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelbarang extends Model
{
    protected $table         ='barang';

    protected $primaryKey    ='brgkode';

    protected $primarykey    ='brgkode';

    protected $allowedFields =[
        'brgkode', 'brgnama', 'brgkatid', 'brgharga', 'brggambar', 'brgstok'
    ]; 
    public function tampildata(){
        return $this->table('barang')->join('kategori', 'brgkatid=katid');
    }

    public function tampildata_cari($cari){
        return $this->table('barang')->join('kategori', 'brgkatid=katid')->orlike('brgkode', $cari)->orlike('brgnama', $cari)->orlike('katnama', $cari);
    }
<<<<<<< HEAD
}
=======

}

}

>>>>>>> 6006be1e287d8688a769c154c17db7eed62adc49
