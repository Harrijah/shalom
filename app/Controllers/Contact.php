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


            if($this->request->getMethod() == 'get'){
                $rules = [
                    'email' => 'required'|valid_email,
                    'telephone' => 'required'|max_length[15],
                    'nom' => 'required',
                    'message' => 'required',

                ];

                $errors = [
                    'email' => [
                        'validateUser' => 'Veuillez remplir par votre adresse e-mail.'
                    ],
                    'telephone' => [
                        'validateUser' => 'Veuillez remplir par un numéro de téléphone valide.'
                    ],
                    'nom' => [
                        'validateUser' => 'Veuillez renseigner votre nom.'
                    ],
                    'message' => [
                        'validateUser' => 'Vous avez oublié d\'écrire votre message.'
                    ],
                ];
            }

            if(!$this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            } else {

                $email->setFrom('noreply@shalom.mg', 'Site web Shalom');
                $email->setTo('contact@shalom.mg');
                // $email->setCC($data['email'], 'contact@shalom.mg');
                $email->setBCC('andrianarivohari@gmail.com');
                $email->setSubject('Demande de la part de ' . $data['nom']);
                $email->setMessage(
                    'Message de '. $data['nom'] . 
                    'Téléphone : '. $data['telephone'] . 
                    $data['message']
                );
                
                $email->send();
                return redirect()->to('/');
                //$email->printDebugger(['headers']);
                //var_dump($data);
            }
        }










    }