<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelbarang extends Model
{
    protected $table         ='barang';
    protected $primarykey    ='brgkode';
    protected $allowedFields =[
        'brgkode', 'brgnama', 'brgkatid', 'brgharga', 'brggambar', 'brgstok'
    ]; 
    public function tampildata(){
        return $this->table('barang')->join('kategori', 'brgkatid=katid')->get();
    }
    
}
