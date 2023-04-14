<?php
    namespace App\Controllers;
    helper(['form']);

    Class Services extends BaseController
    {
        public function internat()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(2);
            $data = [
                'title' => 'Shalom - Maison d\'Accueil | Internat',
                'maclasse' => $lien,
            ];
            return view('header', $data)
            . view('nosban01')
            . view('chambres')
            . view('nosbanx')
            . view('banniere06')
            . view('footer');
        }

        public function externat()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(2);
            $data = [
                'title' => 'Shalom - Maison d\'Accueil | Externat',
                'maclasse' => $lien,
            ];
            return view('header', $data)
            . view('nosban02')
            . view('nosbanx')
            . view('banniere06')
            . view('footer'); 
        }






    }