<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Mail extends Model
    {
        protected $allowedFields = ['nom', 'email', 'telephone', 'demande', 'message'];

        public function mailinfo()
        {
            $data = [
                'nom' => ($_GET['nom']),
                'email' => ($_GET['email']),
                'telephone' => ($_GET['telephone']),
                // 'demande' => ($_GET['demande']),
                'message' => ($_GET['message'])
            ];
            return $data;
        }



















    }