<?php

namespace App\Controllers;
class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Casley Pilueta',
                'email'     => 'casley@example.com',
                'phone'     => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria@example.com',
                'phone'     => '09181234567',
            ],
            [
                'full_name' => 'Kristine Crismundo',
                'email'     => 'kristine@example.com',
                'phone'     => '09191234567',
            ],
            [
                'full_name' => 'Angela Eugenio',
                'email'     => 'angela@example.com',
                'phone'     => '09201234567',
            ],
            [
                'full_name' => 'Jason Mendoza',
                'email'     =>'jason@example.com',
                'phone'     => '09211234567',
            ],
        ];
        return view('customers', $data);
       }
}

