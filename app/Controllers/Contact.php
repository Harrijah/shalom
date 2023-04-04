<?php
    namespace App\Controllers;

    use App\Models\Mail;

    

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
    		$model = model(Mail::class);
    		$data = $model->mailinfo();

            $email = \Config\Services::email();

            $email->setFrom('contact@shalom.mg', 'Site web Shalom');
            $email->setTo('contact@axel.mg');
            $email->setCC($data['email']);
            // $email->setBCC('');
            $email->setSubject('Demande de la part de ' . $data['nom']);
            $email->setMessage($data['message']);

            $email->send();
            return redirect()->to('/');
            //$email->printDebugger(['headers']);
			//var_dump($data);
        }










    }