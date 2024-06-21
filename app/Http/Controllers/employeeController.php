<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $page = 2;
        if (strlen($search)) {
            $data = employee::where('nm_employee', 'like', "%$search%")
                ->orWhere('username', 'like', "%$search%")
                ->orWhere('password', 'like', "%$search%")
                ->orWhere('role', 'like', "%$search%")
                ->orWhere('phone_num', 'like', "%$search%")
                ->paginate($page);
            Session::put('page_url', request()->fullUrl());
        } else {
            $data = employee::orderby('id', 'desc')->paginate($page);
            Session::put('page_url', request()->fullUrl());
        }
        return view('account.account')->with('data', $data);
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
            'nm_employee' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => '',
            'phone_num' => 'required',

        ]);

        employee::create($validatedData);
        return redirect('/account');
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
    public function update(Request $request, employee $data, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        employee::where('id', $id)->delete();
        return redirect('/account');
    }
}
