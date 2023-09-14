@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Nombre de Sucursal</label>
                <input type="text" class="form-control" name="title"
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Abreviatura</label>
                <input type="text" class="form-control" name="title"
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Cantidad de Bodegas</label>
                <input type="text" class="form-control" name="title"
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Agregar un correo válido</div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection