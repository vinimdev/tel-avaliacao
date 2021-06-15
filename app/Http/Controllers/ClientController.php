<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ClientController extends Controller
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->client->paginate(10);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listState = Config::get('constants.listState');
        return view('clients.create', compact('listState'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        try {
            $data = $request->all();
            $data['user_register_id'] = auth()->user()->id;

            $request->validate([
                                'birth_date' => 'before_or_equal:'.now()->subYears(2)->format("Y-m-d")
                                ]);

            $this->client->create($data);

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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $listState = Config::get('constants.listState');
        return view('clients.edit', compact('client', 'listState'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client)
    {
        try {
            $data = $request->all();
            $data['user_update_id'] = auth()->user()->id;

            $client->update($data);

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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $client)
    {
        try {
            $client->delete();

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
