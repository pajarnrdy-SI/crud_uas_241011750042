<?php

namespace App\Http\Controllers;

use App\Models\Perabot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PerabotController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | FRONTEND
    |--------------------------------------------------------------------------
    */

    public function publicIndex(Request $request)
    {

        $search = $request->search;

        $perabots = Perabot::query()

            ->when($search,function($query) use ($search){

                $query->where(
                    'nama_perabot',
                    'LIKE',
                    "%{$search}%"
                )

                ->orWhere(
                    'bahan',
                    'LIKE',
                    "%{$search}%"
                );

            })

            ->latest()

            ->get();

        return view(

            'home',

            compact(

                'perabots',

                'search'

            )

        );

    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL PRODUK
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {

        $perabot = Perabot::findOrFail(

            $id

        );

        return view(

            'detail',

            compact(

                'perabot'

            )

        );

    }


    /*
    |--------------------------------------------------------------------------
    | ADMIN CRUD
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $perabots = Perabot::latest()

            ->get();

        return view(

            'perabot.index',

            compact(

                'perabots'

            )

        );

    }


    public function create()
    {

        return view(

            'perabot.create'

        );

    }


    public function store(Request $request)
    {

        $request->validate([

            'nama_perabot'=>'required',

            'bahan'=>'required',

            'ukuran'=>'required',

            'harga'=>'required|numeric',

            'gambar'=>

            'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);


        $gambarPath = null;


        if(

            $request->hasFile(

                'gambar'

            )

        ){

            $gambarPath =

                $request

                ->file('gambar')

                ->store(

                    'perabot',

                    'public'

                );

        }


        Perabot::create([

            'nama_perabot'=>

            $request->nama_perabot,

            'bahan'=>

            $request->bahan,

            'ukuran'=>

            $request->ukuran,

            'harga'=>

            $request->harga,

            'gambar'=>

            $gambarPath

        ]);


        return redirect()

            ->route(

                'perabot.index'

            )

            ->with(

                'success',

                'Data berhasil ditambahkan'

            );

    }


    public function edit($id)
    {

        $perabot =

            Perabot::findOrFail(

                $id

            );


        return view(

            'perabot.edit',

            compact(

                'perabot'

            )

        );

    }


    public function update(

        Request $request,

        $id

    ){

        $request->validate([

            'nama_perabot'=>'required',

            'bahan'=>'required',

            'ukuran'=>'required',

            'harga'=>'required|numeric',

            'gambar'=>

            'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);


        $perabot =

            Perabot::findOrFail(

                $id

            );


        $gambarPath =

            $perabot->gambar;


        if(

            $request->hasFile(

                'gambar'

            )

        ){

            if(

                $perabot->gambar &&

                Storage::disk(

                    'public'

                )

                ->exists(

                    $perabot->gambar

                )

            ){

                Storage::disk(

                    'public'

                )

                ->delete(

                    $perabot->gambar

                );

            }


            $gambarPath =

                $request

                ->file(

                    'gambar'

                )

                ->store(

                    'perabot',

                    'public'

                );

        }


        $perabot->update([

            'nama_perabot'=>

            $request->nama_perabot,

            'bahan'=>

            $request->bahan,

            'ukuran'=>

            $request->ukuran,

            'harga'=>

            $request->harga,

            'gambar'=>

            $gambarPath

        ]);


        return redirect()

            ->route(

                'perabot.index'

            )

            ->with(

                'success',

                'Data berhasil diperbarui'

            );

    }


    public function destroy($id)
    {

        $perabot =

            Perabot::findOrFail(

                $id

            );


        if(

            $perabot->gambar &&

            Storage::disk(

                'public'

            )

            ->exists(

                $perabot->gambar

            )

        ){

            Storage::disk(

                'public'

            )

            ->delete(

                $perabot->gambar

            );

        }


        $perabot->delete();


        return redirect()

            ->route(

                'perabot.index'

            )

            ->with(

                'success',

                'Data berhasil dihapus'

            );

    }



    public function exportPdf()
    {

        $perabots =

            Perabot::all();


        $pdf = Pdf::loadView(

            'perabot.pdf',

            compact(

                'perabots'

            )

        );


        return $pdf->download(

            'data_perabot.pdf'

        );

    }

}