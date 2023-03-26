<?php
    namespace App\Controllers;

    class aboutus extends BaseController
    {
        public function aboutus()
        {
            return view('header')
            . view('intro')
            . view('cibles') 
            . view('equipe')
            . view('banniere06')
            . view('footer');
        }
    }