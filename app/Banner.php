<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $fillable = [
        'status',
        'titulo'
    ];
    /**
     * Banner Status.
     * @var array
     */
    public $arrStatus = [
        '0' => 'Bloqueado',
        '1' => 'Liberado',
    ];

}