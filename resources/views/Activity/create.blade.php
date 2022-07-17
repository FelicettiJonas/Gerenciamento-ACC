@extends('Layouts.site')

@Section ('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <form action="{{route('site.atividade.create.form')}}" method="POST">
        @csrf
        <h1 class="text-secondary">Cadastrar ACC</h1>
        <div class="mb-3">
          <label for="atividade" class="form-label">Atividade</label>
          <input type="text" class="form-control" id="atividade" name='activity'>
        </div>
        <div class="mb-3">
          <label for="inst" class="form-label">Instituição(ões) Patrona(s)</label>
          <input type="text" class="form-control" id="inst" name='institution'>
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Carga horaria Total</label>
          <input type="number" class="form-control" id="hora" name='time'>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Descrição" id="descricao" style="height: 100px" name='description'></textarea>
          <label for="descricao">Descrição</label>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary shadow-lg">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
@endsection
