<?php
    namespace App\Controllers;

    use App\Models\Mail;
    use App\Config\Services;

    helper(['form', 'url']);

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
            $model = model(Mail::class);
            $data = $model->mailinfo();

            $email = Services::email();

            $email->setFrom('contact@shalom.mg', 'Site web Shalom');
            $email->setTo('contact@axel.mg');
            // $email->setCC($data['email']);
            // $email->setBCC('');
            $email->setSubject('Demande de la part de ');
            $email->setMessage('');

            $email->send();
            return redirect()->to('/');
        }










    }