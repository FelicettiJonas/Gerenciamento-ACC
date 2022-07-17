@extends('Layouts.login')

@Section ('content')

    <form action="#" method="POST">
        <h1 class="fs-1">Crie sua conta</h1>
        <h2 class="fs-6">Já possui uma conta?<span> Acesse!</span></h2>
        <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="user" placeholder="Insira seu usuario">
        </div>
        <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Insira sua senha">
        </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-lg">Registrar</button>
  </form>

@endsection
