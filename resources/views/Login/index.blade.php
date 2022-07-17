@extends('Layouts.login')

@Section ('content')

    <form action="#" method="POST">
        <h1 class="fs-1">Acessar Sistema</h1>
        <h2 class="fs-6">Não possui uma Conta?<span> Registre-se</span></h2>
        <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="user" placeholder="Insira seu usuario">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Insira sua senha">
        </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-lg">Acessar</button>
  </form>

@endsection
