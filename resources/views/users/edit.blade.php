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
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf

                    @method('put')

                    @include('users.partials.form')

                </form>
            </div>
        </div>
    </div>
@endsection
