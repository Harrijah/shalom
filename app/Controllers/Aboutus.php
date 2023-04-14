<?php
    namespace App\Controllers;
    helper(['form']);

    class Aboutus extends BaseController
    {
        public function aboutus()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(1);
            $data = [
                'title' => 'A propos de nous',
                'maclasse' => $lien,
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