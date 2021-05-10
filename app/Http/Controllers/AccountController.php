<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::all();
        $accounts = User::all();
        $account = new User;

        return view('admin.account.index',compact('accounts','roles','account'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'role_id' => '',
            'active' => '',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create(['name' => $data['name'],'surname' =>$data['surname'],'email' =>$data['email'], 'active' => (isset($data['active']) && $data['active'] == 'on') ? 1 : 0,'role_id' =>$data['role_id'],'password' => Hash::make($data['password'])]);
        // dd($data);

        Toastr::success('Post added successfully :)','Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $account)
    {
        // dd($account);
        $roles = Role::all();
        return view('admin.account.edit', compact('account','roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $account)
    {
       $this->validate($request,[
           'password' => 'confirmed'
       ]);
        $account->name = $request->name;
        $account->surname = $request->surname;
        $account->email = $request->email;
        $account->role_id = $request->role_id;
        if(!is_null($request->password)){
            $account->password = Hash::make($request->password);
        }
        $account->active = (isset($request->active) && $request->active == 'on') ? 1 : 0;
        $account->update();
        Toastr::success('Account upadated successfully !','Success');
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $account)
    {
        //
        $account->delete();
        Toastr::success('Account deleted  successfully :)','Success');
        return back();

    }
}
