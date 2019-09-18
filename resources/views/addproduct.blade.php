@extends('navbar')

@section('content')

<div class="card bg-light justify-content-center " style="width: 50rem;" id="addProduct">
  <img src="" class="card-img-top" alt="Nuevo Producto">
  <div class="card-body d-flex justify-content-center ">
    <form method="post" action="/addproduct/add">
      @csrf
      <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bd-highlight">
          Nombre: <input type="text" name="nombre" value="">
        </div>
        <div class="p-2 bd-highlight">
          Url de Imagen: <input type="text" name="url" value="">
        </div>
        <div class="p-2 bd-highlight">
          Descripcion:<input type="text" name="description" value="">
        </div>
        <div class="p-2 bd-highlight">
            Precio: <input type="text" name="precio" value="">
        </div>
        <div class="p-2 bd-highlight">
        </div>

      </div>
      <button type="submit" class="btn btn-primary" name="button">
        Guardar
        <a href="" hidden >Guardar</a>
      </button>
    </form>

  </div>
</div><br>
<br>


@endsection
