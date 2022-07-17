@extends('Layouts.site')

@Section ('content')
<div class="card bg-white" style="width: 18rem;">
    <div class="card-body">
      <div class="text-end">
        <button class="btn btn-primary shadow-sm"><a href="#" class="text-decoration-none text-primary">Cadastrar ACC</a></button>
    </div>
    <table class="table bg-primary" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Atividade</th>
            <th scope="col">Carga Horária</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Carpi Lote</td>
            <td>23h</td>
            <td>Em Análise</td>
            <td><a href="#">Img btn</a></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Carpi Lote</td>
            <td>23h</td>
            <td>Em Análise</td>
            <td><a href="#">Img btn</a></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Carpi Lote</td>
            <td>23h</td>
            <td>Em Análise</td>
            <td><a href="#">Img btn</a></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Carpi Lote</td>
            <td>23h</td>
            <td>Em Análise</td>
            <td><a href="#">Img btn</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
