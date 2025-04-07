<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agendaModel extends Model
{
    //
    protected $table = 'agenda';
    protected $primaryKey = 'id_agenda';

    protected $fillable = [
        'tanggal',
        'kegiata',
    ];
}
