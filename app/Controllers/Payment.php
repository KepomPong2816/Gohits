<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\TradeModel;

class Payment extends BaseController
{
    public function addTransaction()
    {
        $session = session();
        $user = new User();
        $userModel = new TradeModel();
        
        $namaPengguna = $session->get('id');
        $user = $userModel->getUserById($namaPengguna);
        
        $data = array(
            'name' => $user['nama'],
            'email' => $user['email'].'@gmail.com',
            'type_subscribtion' => 'Novice',
            'gross_ammount' => '5000',
            'statustransaction' => 'Selesai',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        );
        $userModel->created_transaction($data); 

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
    }
}