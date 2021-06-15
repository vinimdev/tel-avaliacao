@extends('layout.template')

@section('main')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-crud-tel">
                    <div class="card-header-height d-flex align-items-center">
                        Registrar
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <x-label for="name" class="col-md-4 col-form-label text-md-end" :value="__('Name')" />
                            <div class="col-md-6">
                                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                <x-auth-validation-errors class="mb-0" :errors="$errors" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <x-label for="email" class="col-md-4 col-form-label text-md-end" :value="__('Email')" />
                            <div class="col-md-6">
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <x-label for="password" class="col-md-4 col-form-label text-md-end" :value="__('Senha')" />
                            <div class="col-md-6">
                                <x-input id="password" class="form-control"
                                         type="password"
                                         name="password"
                                         required autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <x-label for="password_confirmation" class="col-md-4 col-form-label text-md-end" :value="__('Confirmação de senha')" />
                            <div class="col-md-6">
                                <x-input id="password_confirmation" class="form-control"
                                         type="password"
                                         name="password_confirmation" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-tel">
                                    {{ __('Registrar') }}
                                </button>
                                <a class="btn btn-link-under text-tel text-tel" href="{{ route('login') }}">
                                    {{ __('Já está registrado?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
