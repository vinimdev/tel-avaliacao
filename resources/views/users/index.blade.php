@extends('layout.template')

@section('main')

    @include('partials.alerts')

    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-header bg-crud-tel col-md d-flex justify-content-between align-items-center">
                Lista de Usuários
                <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a>
            </div>
            <div class="card-body pb-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-3">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th style="width: 80px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn-delete"><i class="fas fa-trash-alt" onclick="deleteInDataBase('{{ route('users.destroy', $user->id) }}')"></i> </a>
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
        {{ $users->links() }}
    </div>
@endsection
