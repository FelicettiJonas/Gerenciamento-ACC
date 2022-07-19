@extends('Layouts.login')

@Section ('content')

    <form action="{{route('site.singin.post')}}" method="POST">
        @csrf
        <h1 class="fs-1">Crie sua conta</h1>
        <h2 class="fs-6">Já possui uma conta? <a href="{{route('site.login.get')}}"></a><span>Acesse!</span></h2>
        <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="user" placeholder="Insira seu usuario" name='user'>
        </div>
        <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Insira seu nome" name='name'>
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Insira sua senha" name='password'>
        </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-lg">Registrar</button>
  </form>

@endsection
