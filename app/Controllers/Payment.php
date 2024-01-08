<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\TradeModel;

class Payment extends BaseController
{
    public function addTransaction()
    {
        $model = new User();

        // Check if passwords match
        if (true) {
            echo '<script>
                alert("Password tidak cocok. Silakan coba lagi.");
                window.location="' . base_url('/reg') . '"
            </script>';
            exit;
        }
        
        $data = array(
            'name' => got from session or somewhere,
            'email' => got from session or somewhere,
            'type_subscribtion' => got from after button got clicked,
            'gross_ammount' => got from after button got clicked,
            'statustransaction' => got from after button clicked or completed transaction,
            'created' => got from after button clicked,
            'updated' => got from after transaction complete 
        );
        $model->created_transaction($data); 

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/login') . '"
        </script>';
    }
}