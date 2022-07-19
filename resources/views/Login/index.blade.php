@extends('Layouts.login')

@Section ('content')

    <form action="{{route('site.login.post')}}" method="POST">
      @csrf
        <h1 class="fs-1">Acessar Sistema</h1>
        <h2 class="fs-6">Não possui uma Conta? <a href="{{route('site.singin.get')}}"><span> Registre-se</span></a></h2>
        <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="user" placeholder="Insira seu usuario" name='user'>
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Insira sua senha" name='password'>
        </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-lg">Acessar</button>
  </form>

@endsection
