@extends('Layouts.site')

@Section ('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <form action="#" method="POST">
        <h1 class="text-secondary">Aluno: João das Neves</h1>
        <div class="mb-3">
          <label for="atividade" class="form-label">Atividade</label>
          <input type="text" class="form-control" id="atividade">
        </div>
        <div class="mb-3">
          <label for="inst" class="form-label">Instituição(ões) Patrona(s)</label>
          <input type="text" class="form-control" id="inst">
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Carga horaria Total</label>
          <input type="number" class="form-control" id="hora">
        </div>
        <div class="mb-3">
          <label for="validador" class="form-label">Validador</label>
          <input type="text" class="form-control" id="validador">
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Descrição" id="descricao" style="height: 100px"></textarea>
          <label for="descricao">Descrição</label>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-danger shadow-sm">Recusar</button>
            <button type="submit" class="btn btn-primary shadow-sm">Aprovar</button>
        </div>
      </form>
    </div>
  </div>
@endsection
