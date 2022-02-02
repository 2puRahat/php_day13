<?php


namespace App\classes;
class User
{
    protected $user = [];

    public function getAllUser(){
        $this->user = [
            0 =>[
                'name'      => 'Tapu',
                'mobile'    => '01829900988',
                'location'  => 'Azimpur',
            ],
            1 =>[
                'name'      => 'Rahat',
                'mobile'    => '01829900911',
                'location'  => 'Dhaka',
            ],
        ];
        return $this->user;
    }
}