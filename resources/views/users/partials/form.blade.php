<div class="row">
    <div class="form-group mb-3 col-md-6">
        <label for="name" class="col-form-label">Nome</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name ?? '' }}" required>
    </div>
    <div class="form-group mb-3 col-md-6">
        <label for="email" class="col-form-label">E-mail</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email ?? '' }}" required>
    </div>
    <div class="form-group mb-3 col-md-6">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group mb-3 col-md-6">
        <label for="password_confirmation" class="form-label">Confirmação de Senha</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
</div>
<div class="row">
    <div class="col-md">
        <hr>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
    </div>
</div>
