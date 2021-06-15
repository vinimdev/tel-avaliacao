@extends('layout.template')
@section('main')
    <div class="col-md-12">
        @include('partials.alerts')
        <div class="card">
            <div class="card-header bg-crud-tel">
                <div class="card-header-height d-flex align-items-center">
                    Cadastro
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf

                    @include('users.partials.form')

                </form>
            </div>
        </div>
    </div>
@endsection
