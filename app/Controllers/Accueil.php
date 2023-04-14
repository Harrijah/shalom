<?php
    namespace App\Controllers;
    helper(['form']);

    class Accueil extends BaseController
    {

        public function accueil()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(2);
            $data =[
                'title' => 'Shalom - Maison d\'Accueil',
                'maclasse' => $lien,
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