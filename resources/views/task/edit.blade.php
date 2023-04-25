@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Editar Crear tarea
                </div>
                <div class="card-body">
                    <form action="{{route('task.update', $task)}}" method="post">
                        @csrf @method('PUT')
                        <input type="text" name="name" value="{{$task->name}}" placeholder="Introduzca el nombre de la tarea">
                        <input type="text" name="description" value="{{$task->description}}" placeholder="Descripción de la tarea">
                        <label for="startDate">Fecha de inicio</label>
                        <input type="date" name="start" id="startDate" value="{{$task->start}}">
                        <label for="startEnd">Fecha de culminación</label>
                        <input type="date" name="end" id="startEnd" value="{{$task->end}}">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
