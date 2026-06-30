<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Perabot;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function create($id)
    {

        $perabot = Perabot::findOrFail(

            $id

        );

        return view(

            'order.create',

            compact(

                'perabot'

            )

        );

    }



    public function store(Request $request)
    {

        $request->validate([

            'nama'=>'required',

            'telepon'=>'required',

            'alamat'=>'required',

            'jumlah'=>'required'

        ]);


        $perabot = Perabot::findOrFail(

            $request->id_perabot

        );


        Order::create([

            'id_perabot'=>

            $request->id_perabot,

            'nama'=>

            $request->nama,

            'telepon'=>

            $request->telepon,

            'alamat'=>

            $request->alamat,

            'jumlah'=>

            $request->jumlah,

            'total'=>

            $request->jumlah *

            $perabot->harga,

            'status'=>

            'Pending'

        ]);


        return redirect()

            ->route('home')

            ->with(

                'success',

                'Pesanan berhasil dibuat'

            );

    }



    public function index()
    {

        $orders = Order::latest()

            ->get();

        return view(

            'order.index',

            compact(

                'orders'

            )

        );

    }


}