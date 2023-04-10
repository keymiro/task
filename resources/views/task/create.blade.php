@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Crear tarea
                </div>
                <div class="card-body">
                    <form action="{{route('task.store')}}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Introduzca el nombre de la tarea">
                        <input type="text" name="description" placeholder="Descripción de la tarea">
                        <label for="startDate">Fecha de inicio</label>
                        <input type="date" name="start" id="startDate">
                        <label for="startEnd">Fecha de culminación</label>
                        <input type="date" name="end" id="startEnd">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
