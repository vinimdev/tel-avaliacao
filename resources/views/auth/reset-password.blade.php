@extends('layout.template')

@section('main')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-crud-tel d-flex align-items-center">
                    <div class="card-header-height d-flex align-items-center">
                        Escolha sua nova senha
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
                            <div class="col-md-6">
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Senha</label>
                            <div class="col-md-6">
                                <x-input id="password" class="form-control" type="password" name="password" required />
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirmação de senha</label>
                            <div class="col-md-6">
                                <x-input id="password_confirmation" class="form-control"
                                         type="password"
                                         name="password_confirmation" required />
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

