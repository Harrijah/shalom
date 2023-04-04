<?php
    namespace App\Models;

    class Mail extends Model
    {
        protected $allowedFields = ['nom', 'email', 'telephone', 'demande', 'message'];

        public function mailinfo()
        {
            $data = [
                'nom' => ($_POST['nom']),
                'email' => ($_POST['email']),
                'telephone' => ($_POST['telephone']),
                'demande' => ($_POST['demande']),
                'message' => ($_POST['message'])
            ];
            return $data;
        }



















    }