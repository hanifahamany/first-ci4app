<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini controller Coba method index';
    }
    public function test()
    {
        echo "Ini controller Coba method test untuk $this->nama";
        // echo $this->nama;
    }
}
