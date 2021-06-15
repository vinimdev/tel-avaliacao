<div class="row justify-content-evenly">
    <div class="form-group mb-3 col-md-6">
        <label for="name" class="col-form-label">Nome</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ $client->name ?? '' }}" ="" autocomplete="name" autofocus="">
    </div>
    <div class="form-group mb-3 col-md-6">
        <label for="state" class="col-form-label">Estado</label>
        <select class="form-select" name="state" id="state">
            <option value="">Estado</option>
            @foreach($listState as $key => $states)
                <option {{ isset($client) && $client->state === $states ? 'selected' : '' }} value="{{ $states }}">{{ $key }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row justify-content-evenly">
    <div class="form-group mb-3 col-md-3">
        <label for="cpf" class="col-form-label">CPF</label>
        <input id="cpf" type="text" minlength="14" maxlength="14" class="form-control cpf_mask" name="cpf"  value="{{ $client->cpf ?? '' }}" autocomplete="cpf">
    </div>
    <div class="form-group mb-3 col-md-3">
        <label for="rg" class="col-form-label">RG</label>
        <input id="rg" type="text" minlength="4" maxlength="20" class="form-control rg_mask" name="rg" value="{{ $client->rg ?? '' }}" autocomplete="cpf">
    </div>
    <div class="form-group mb-3 col-md-3">
        <label for="birth_date" class="col-form-label">Data de Nascimento</label>
        <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ $client->birth_date ?? '' }}" autocomplete="birth_date">
    </div>
    <div class="form-group mb-3 col-md-3">
        <label for="phone" class="col-form-label">Telefone</label>
        <input id="phone" type="text" class="form-control phone_mask" name="phone" value="{{ $client->phone ?? '' }}" autocomplete="phone">
    </div>
</div>
<div class="row">
    <div class="col-md">
        <hr>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
    </div>
</div>
