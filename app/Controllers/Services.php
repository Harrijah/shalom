<?php
    namespace App\Controllers;

    Class Services extends BaseController
    {
        public function internat()
        {
            return view('header')
            . view('nosban01')
            . view('banniere06')
            . view('footer');
        }

        public function externat()
        {
            return view('header')
            . view('nosban02')
            . view('banniere06')
            . view('footer'); 
        }






    }