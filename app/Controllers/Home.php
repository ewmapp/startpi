<?php

namespace App\Controllers;

use \App\Entities\Participant;

class Home extends BaseController
{
    private $participantModel;

    public function __construct()
    {
        $this->participantModel       = new \App\Models\ParticipanteModel;
    }

    public function index()
    {
        $participantes = $this->participantModel->findAll();



        $data = [
            'pg_title' => 'Home',
        ];
        return view('home', $data);
    }
}
