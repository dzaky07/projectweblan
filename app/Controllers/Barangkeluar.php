<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Barangkeluar extends BaseController
{
    public function data()
    {
        return view('barangkeluar/viewdata');
    }

    public function input(){
        return view('barangkeluar/forminput');
    }
}
