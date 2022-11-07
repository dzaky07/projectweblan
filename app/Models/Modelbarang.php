<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelbarang extends Model
{
    protected $table         ='barang';
    protected $primaryKey    ='brgkode';
<<<<<<< HEAD
=======


    protected $primaryKey    ='brgkode';
    protected $primarykey    ='brgkode';

>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
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

    public function tampildata_cari($cari){
        return $this->table('barang')->join('kategori', 'brgkatid=katid')->orlike('brgkode', $cari)->orlike('brgnama', $cari)->orlike('katnama', $cari);
    }

}
}
        return $this->table('barang')->join('kategori', 'brgkatid=katid')->get();

    }

    public function tampildata_cari($cari){
        return $this->table('barang')->join('kategori', 'brgkatid=katid')->orlike('brgkode', $cari)->orlike('brgnama', $cari)->orlike('katnama', $cari);
    }

}


}

}


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
