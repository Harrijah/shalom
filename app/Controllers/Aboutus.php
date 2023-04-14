<?php
    namespace App\Controllers;
    helper(['form']);

    class Aboutus extends BaseController
    {
        public function aboutus()
        {
            $data = [
                'title' => 'Shalom - A propos de nous',
            ];
            return view('header', $data)
            . view('intro')
            . view('cibles') 
            . view('equipe')
            . view('approche')
            . view('banniere06')
            . view('footer');
        }
    }