<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [

        'id_perabot',

        'nama',

        'telepon',

        'alamat',

        'jumlah',

        'total',

        'status'

    ];


    public function perabot()
    {

        return $this->belongsTo(

            Perabot::class,

            'id_perabot',

            'id_perabot'

        );

    }

}