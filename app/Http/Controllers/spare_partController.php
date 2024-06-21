<?php

namespace App\Http\Controllers;

use App\Models\spare_part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class spare_partController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $page = 2;
        if (strlen($search)) {
            $sparepartdata = spare_part::where('name_spart', 'like', "%$search%")
                ->orWhere('type', 'like', "%$search%")
                ->orWhere('purchase_price', 'like', "%$search%")
                ->orWhere('sell_price', 'like', "%$search%")
                ->orWhere('stock', 'like', "%$search%")
                ->paginate($page);
            Session::put('page_url', request()->fullUrl());
        } else {
            $sparepartdata = spare_part::orderby('id', 'desc')->paginate($page);
            Session::put('page_url', request()->fullUrl());
        }
        return view('information.sparepartdata')->with('sparepartdata', $sparepartdata);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_spart' => 'required',
            'type' => 'required',
            'purchase_price' => 'required',
            'sell_price' => 'required',
            'stock' => 'required',
            'image' => 'image'


        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sparepartdata-images');
        }

        spare_part::create($validatedData);
        return redirect('/sparepartdata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, spare_part $sparepartdata, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spare_part $sparepartdata, $id)
    {
        // Temukan data berdasarkan ID
        $sparepartdata = spare_part::findOrFail($id);

        // Dapatkan path gambar
        $imagePath = $sparepartdata->image;

        // Jika ada gambar, hapus dari penyimpanan
        if ($imagePath) {
            Storage::delete($imagePath);
        }

        // Hapus data dari database
        $sparepartdata->delete();

        return redirect('/sparepartdata');
    }
}
