@extends('layout.template')
@section('main')
    <div class="col-md-12">
        @include('partials.alerts')
        <div class="card">
            <div class="card-header bg-crud-tel">
                <div class="card-header-height d-flex align-items-center">
                    Editar
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('clients.update', $client->id) }}">
                    @csrf

                    @method('put')

                    @include('clients.partials.form')

                </form>
            </div>
        </div>
    </div>
@endsection
