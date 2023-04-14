<?php
    namespace App\Controllers;
    helper(['form']);

    class Accueil extends BaseController
    {

        public function accueil()
        {
            $data =[
                'title' => 'Shalom - Maison d\'Accueil',
            ];
            return view('header', $data)
            . view('banniere01')
            . view('banniere02')
            . view('banniere03')
            . view('banniere04')
            . view('banniere05')
            . view('banniere06')
            . view('footer');
        }
    }