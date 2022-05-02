<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipanteModel extends Model
{
    protected $table                = 'ewm_participantes';
    protected $primaryKey           = 'part_id';
    protected $returnType           = 'App\Entities\Participante';
    protected $allowedFields        = [
        'cate_id',
        'part_db',
        'part_print',
        'part_guid',
        'part_nome',
        'part_cracha',
        'part_instituicao',
        'part_funcao',
        'part_email',
        'part_celular',
        'part_telefone',
        'part_doc',
        'part_cpf',
        'part_rg',
        'part_telefone',
        'part_end_cep',
        'part_end_rua',
        'part_end_numero',
        'part_end_complemento',
        'part_end_bairro',
        'part_end_cidade',
        'part_end_estado',
        'part_opc1',
        'part_opc2',
        'part_opc3',
        'part_opc4',
        'part_opc5',
        'part_opc6',
        'part_opc7',
        'part_opc8',
        'part_opc9',
        'part_opc10',
    ];


    protected $useSoftDeletes       = false;
    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'part_create';
    protected $updatedField         = 'part_update';
}
