@extends('Layouts.site')

@Section ('content')
<div class="card bg-white" style="width: 18rem;">
    <div class="card-body">
      <div class="text-end">
        <button class="btn btn-primary shadow-sm"><a href="{{route('site.atividade.create')}}" class="text-decoration-none text-primary">Cadastrar ACC</a></button>
    </div>
    <table class="table bg-primary" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Atividade</th>
            <th scope="col">Carga Horária</th>
            <th scope="col">Descrição</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($activities as $activity)
            <tr>
              <th scope="row">{{$activity->id}}</th>
              <td>{{$activity->activity}}</td>
              <td>{{$activity->time}}</td>
              <td>{{$activity->description}}</td>
              
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
