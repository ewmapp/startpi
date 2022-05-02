<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Participante extends Entity
{
    protected $dates   = [
        'part_create',
        'part_update',
    ];
}
