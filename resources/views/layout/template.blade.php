<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ URL::to('/')}}">
    <title>Avaliação Técnica - Tel</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/styles.css">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/96340b4538.js" crossorigin="anonymous"></script>
</head>
<body>
@auth
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-3" id="main-menu">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto d-flex">

                <li class="nav-item">
                    <a class="nav-link" id="user_menu" aria-current="page" href="{{ route('users.index') }}">
                        <i class="fas fa-user"></i> Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="user_menu" aria-current="page" href="{{ route('clients.index') }}">
                        <i class="fas fa-users"></i> Clientes
                    </a>
                </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name ?? " "}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Sair') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endauth

<div class="container">
    <div class="row mt-5">
        <div class="col-md">
            @yield('main')
        </div>
    </div>
</div>

<footer class="footer">
    <span>Copyright © 2021 - Vinícius da Silva Meira</span>
</footer>

<form id="delete_form" action="" method="post">
    @csrf
    @method('delete')
</form>

{{-- Scripts --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>

<script>

    jQuery(document).ready(function(){
        jQuery('.cpf_mask').mask('000.000.000-00');
        jQuery('.rg_mask').mask('00000000000000000000');
        jQuery('.zipcode_mask').mask('00000-000');
    });

    var behavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };

    $('.phone_mask').mask(behavior, options);

    function deleteInDataBase(path){
        if(confirm("Você tem certeza que quer remover este registro?")) {
            const deleteForm = document.querySelector('#delete_form');
            deleteForm.action = path;

            deleteForm.submit();
        }
    }

</script>

</body>
</html>
