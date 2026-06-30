<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perabot extends Model
{

    protected $primaryKey='id_perabot';

    protected $fillable=[

        'gambar',

        'nama_perabot',

        'bahan',

        'ukuran',

        'harga'

    ];


    public function orders()
    {

        return $this->hasMany(

            Order::class,

            'id_perabot',

            'id_perabot'

        );

    }

}