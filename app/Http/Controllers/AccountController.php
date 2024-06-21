<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $page = 3;
        if (strlen($search)) {
            $data = Account::where('name', 'like', "%$search%")
                ->orWhere('username', 'like', "%$search%")
                ->orWhere('password', 'like', "%$search%")
                ->orWhere('role', 'like', "%$search%")
                ->paginate($page);
        } else {
            $data = Account::orderby('id', 'desc')->paginate($page);
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'handphone_number' => 'required',
            'role' => 'required',

        ]);

        Account::create($validatedData);
        return redirect('/account');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $data, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'handphone_number' => 'required',
            'role' => '',

        ]);

        Account::where('id', $id)->update($validatedData);
        return redirect('/account');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Account::where('id', $id)->delete();
        return redirect('/account');
    }
}
