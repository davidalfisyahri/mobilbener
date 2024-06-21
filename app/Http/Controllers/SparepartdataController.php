<?php

namespace App\Http\Controllers;

use App\Models\Sparepartdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SparepartdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $page = 2;
        if (strlen($search)) {
            $sparepartdata = Sparepartdata::where('order', 'like', "%$search%")
                ->orWhere('code_part', 'like', "%$search%")
                ->orWhere('name_part', 'like', "%$search%")
                ->orWhere('qty', 'like', "%$search%")
                ->orWhere('cogs', 'like', "%$search%")
                ->orWhere('price', 'like', "%$search%")
                ->paginate($page);
        } else {
            $sparepartdata = Sparepartdata::orderby('id', 'desc')->paginate($page);
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
            'order' => 'required',
            'code_part' => 'required',
            'name_part' => 'required',
            'qty' => 'required',
            'cogs' => 'required',
            'price' => 'required',
            'image' => 'image'


        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sparepartdata-images');
        }

        Sparepartdata::create($validatedData);
        return redirect('/sparepartdata');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sparepartdata $sparepartdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sparepartdata $sparepartdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sparepartdata $sparepartdata, $id)
    {
        $validatedData = $request->validate([
            'order' => 'required',
            'code_part' => 'required',
            'name_part' => 'required',
            'qty' => 'required',
            'cogs' => 'required',
            'price' => 'required',
            'image' => 'image'

        ]);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('sparepartdata-images');
        }

        Sparepartdata::where('id', $id)->update($validatedData);
        return redirect('/sparepartdata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sparepartdata $sparepartdata, $id)
    {
        // Temukan data berdasarkan ID
        $sparepartdata = Sparepartdata::findOrFail($id);

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
