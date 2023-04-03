<?php
    namespace App\Controllers;

    class Accueil extends BaseController
    {
        public function accueil()
        {
            return view('header')
            . view('banniere01')
            . view('banniere02')
            . view('banniere03')
            . view('banniere04')
            . view('banniere05')
            . view('banniere06')
            . view('footer');
        }
    }