<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	echo view('front/head_view');
    	echo view('front/navbar');
        echo view('front/principal');
    	echo view('front/footer');
          
    }

    public function quienes_somos()
    {

        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/quienessomos');
        echo view('front/footer');
    }


 public function acercaDe()
    {
        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/acercaDe');
        echo view('front/footer');
    }

    public function registrarse()
    {
        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/registrarse');
        echo view('front/footer');
    }

    public function login()
    {

        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/login');
        echo view('front/footer');
    }
    
}
