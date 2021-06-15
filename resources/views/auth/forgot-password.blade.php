@extends('layout.template')

@section('main')

    <div name="logo" class="d-flex justify-content-center mt-5">
        <a href="/">
            <img src="/images/logo_unime.png" height="60" alt="">
        </a>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-crud-tel d-flex align-items-center">
                    <div class="card-header-height d-flex align-items-center">
                        Recuperação de senha
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required="" autocomplete="email" autofocus="">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-tel">
                                    {{ __('Recuperar senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

