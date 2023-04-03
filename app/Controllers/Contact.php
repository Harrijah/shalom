<?php
    namespace App\Controllers;

    class Contact extends BaseController
    {
        public function contact()
        {
            return view('header')
            . view('contact')
            // . view('chambres')
            . view('footer');
        }










    }