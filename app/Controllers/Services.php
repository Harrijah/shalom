<?php
    namespace App\Controllers;
    helper(['form']);

    Class Services extends BaseController
    {
        public function internat()
        {
            return view('header')
            . view('nosban01')
            . view('chambres')
            . view('nosbanx')
            . view('banniere06')
            . view('footer');
        }

        public function externat()
        {
            return view('header')
            . view('nosban02')
            . view('nosbanx')
            . view('banniere06')
            . view('footer'); 
        }






    }