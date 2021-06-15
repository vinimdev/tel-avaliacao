<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $data = $request->all();

            $data['password'] = Hash::make($data['password']);
            $this->user->create($data);

            $request->session()->flash('success', 'Registro gravado com sucesso');
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                $request->session()->flash('error', $e->getMessage());
            } else {
                $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
            }
        }
        return redirect()->back();
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
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        try {
            $data = $request->all();
            if(empty($request->get('password'))){
                unset($data['password']);
            } else {
                $data['password'] = Hash::make($data['password']);
            }
            $user->update($data);

            $request->session()->flash('success', 'Registro atualizado com sucesso');
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                $request->session()->flash('error', $e->getMessage());
            } else {
                $request->session()->flash('error', 'Ocorreu um erro ao tentar atualizar esses dados!');
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        try {
            $user->delete();

            $request->session()->flash('success', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                $request->session()->flash('error', $e->getMessage());
            } else {
                $request->session()->flash('error', 'Ocorreu um erro ao tentar excluir esses dados!');
            }
        }

        return redirect()->back();
    }
}
