@extends('layout.template')

@section('main')

    @include('partials.alerts')

    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-header bg-crud-tel col-md d-flex justify-content-between align-items-center">
                Lista de Clientes
                <a href="{{ route('clients.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a>
            </div>
            <div class="card-body pb-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-3">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Criado por</th>
                            <th>Atualizado por</th>
                            <th>Data de Nascimento</th>
                            <th>Telefone</th>
                            <th>Estado</th>
                            <th style="width: 80px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->cpf }}</td>
                                <td>{{ $client->rg }}</td>
                                <td>{{ $client->userRegister->name }}</td>
                                <td>{{ $client->userUpdate->name ?? '' }}</td>
                                <td>{{ \Carbon\Carbon::parse($client->birth_date)->locale('pt_BR')->isoFormat('D \\d\\e MMMM \\d\\e YYYY') }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->state }}</td>
                                <td>
                                    <a href="{{ route('clients.edit', $client->id) }}" class="btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn-delete"><i class="fas fa-trash-alt" onclick="deleteInDataBase('{{ route('clients.destroy', $client->id) }}')"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        {{ $clients->links() }}
    </div>
@endsection
