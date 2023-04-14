<?php
    namespace App\Controllers;

    use App\Models\Mail;

    

    class Contact extends BaseController
    {
        public function contact()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(2);
            $data = [
                'title' => 'Shalom - Maison d\'Accueil | Contact',
                'maclasse' => $lien,
            ];
            return view('header', $data)
            . view('contact')
            . view('footer');
        }

        public function sendemail()
        {
            helper(['form']);
    		$model = model(Mail::class);
    		$data = $model->mailinfo();
    		// $data = [];

            $email = \Config\Services::email();

            if($this->request->getMethod() == 'post'){
                $rules = [
                    'email' => 'required|valid_email',
                    'telephone' => 'required|max_length[15]',
                    'nom' => 'required',
                    'message' => 'required',
                ];

                $errors = [
                    'email' => [
                        'required' => 'Veuillez remplir par votre adresse e-mail.'
                    ],
                    'telephone' => [
                        'required' => 'Veuillez remplir par un numéro de téléphone valide.'
                    ],
                    'nom' => [
                        'required' => 'Veuillez renseigner votre nom.'
                    ],
                    'message' => [
                        'required' => 'Vous avez oublié d\'écrire votre message.'
                    ],
                ];
            }

            if(! $this->validate($rules, $errors)){
                // $data['errors'] = $this->validator->getErrors();
                $data['validation'] = $this->validator;
                return view('header', $data)
                . view('banniere06');
            } else {

                $email->setFrom('noreply@shalom.mg', 'Site web Shalom');
                $email->setTo('jmcrakotoma@gmail.com');
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

        public function sendcontact()
        {
            helper(['form']);
    		$model = model(Mail::class);
    		$data = $model->mailcontact();

            $email = \Config\Services::email();

            if($this->request->getMethod() == 'post'){
                $rules = [
                    'email' => 'required|valid_email',
                    'telephone' => 'required|max_length[15]',
                    'nom' => 'required',
                    'demande' => 'required',
                    'message' => 'required',
                ];

                $errors = [
                    'email' => [
                        'required' => 'Veuillez remplir par votre adresse e-mail.'
                    ],
                    'telephone' => [
                        'required' => 'Veuillez remplir par un numéro de téléphone valide.'
                    ],
                    'nom' => [
                        'required' => 'Veuillez renseigner votre nom.'
                    ],
                    'demande' => [
                        'required' => 'Veuillez renseigner l\'objet de votre demande.'
                    ],
                    'message' => [
                        'required' => 'Vous avez oublié d\'écrire votre message.'
                    ],
                ];
            }

            if(! $this->validate($rules, $errors)){
                $data['errors'] = $this->validator->getErrors();
                $data['validation'] = $this->validator;
                return view('header', $data)
                . view('contact');
            } else {

                $email->setFrom('noreply@shalom.mg', 'Site web Shalom');
                $email->setTo('jmcrakotoma@gmail.com');
                // $email->setCC($data['email'], 'contact@shalom.mg');
                $email->setBCC('andrianarivohari@gmail.com');
                $email->setSubject($demande .' de la part de ' . $data['nom']);
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