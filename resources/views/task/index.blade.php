@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Listado de tareas
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha Inicio</th>
                            <th scope="col">Fecha Culminación</th>
                            <th scope="col">Creado Por</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <th>{{$task->name}}</th>
                                <td>{{$task->description}}</td>
                                <td>{{$task->start}}</td>
                                <td>{{$task->end}}</td>
                                <td>{{$task->user->name}}</td>
                                <td>
                                    <a href="{{ route('task.edit', $task)}}">Editar</a>
                                    <form action="{{route('task.destroy', $task)}}" method="post">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Esta seguro de eliminar este registro ?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
