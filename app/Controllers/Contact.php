<?php
    namespace App\Controllers;
    helper('form');

    class Contact extends BaseController
    {
        public function contact()
        {
            return view('header')
            . view('contact')
            . view('footer');
        }

        public function sendemail()
        {
            helper(['form', 'url']);
            $email = \Config\Services::email();



            $email->setFrom('contact@shalom.mg', 'Site web Shalom');
            $email->setTo('contact@axel.mg');
            $email->setCC('hariniaina.andrianarivo@gmail.com');
            // $email->setBCC('');
            $email->setSubject('Test envoi');
            $email->setMessage('Bonjour, Ceci est un test d\'envoi depuis Shalom.mg.');

            $email->send();
            $email->printDebugger(['headers']);
            // return redirect()->to('/internat');
        }










    }