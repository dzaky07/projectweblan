<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Barangmasuk extends BaseController
{
    public function index()
    {
        return view('barangmasuk/forminput');
    }
}
