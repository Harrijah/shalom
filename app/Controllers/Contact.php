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

            $email->setFrom('info@shalom.mg', 'Site web Shalom');
            $email->setTo('contact@shalom.mg');
            $email->setCC($data['email']);
            $email->setBCC('andrianarivohari@gmail.com');
            $email->setSubject('Demande de la part de ' . $data['nom']);
            $email->setMessage(
                'Message de <b>'. $data['nom'] . '</b></br>' .
                'Téléphone : <b>'. $data['telephone'] . '</b></br>' .
                $data['message']
            );

            $email->send();
            return redirect()->to('/');
            //$email->printDebugger(['headers']);
			//var_dump($data);
        }










    }