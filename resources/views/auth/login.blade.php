@extends('layout.template')

@section('main')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-crud-tel">
                    <div class="card-header-height d-flex align-items-center">
                        Login
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required="" autocomplete="email" autofocus="">
                                <x-auth-validation-errors class="mb-0" :errors="$errors" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Senha</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        {{ __('Relembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-tel">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-link-under text-tel text-tel" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                                <div class="form-group row mt-3 text-tel">
                                    <div class="col-md-12">
                                        Ainda não possui uma conta?<br>
                                    </div>
                                    <div class="col-md-6">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn-link-under text-tel text-tel">Cadastre-se aqui!</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
