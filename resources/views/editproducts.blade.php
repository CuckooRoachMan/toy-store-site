@extends('navbar')

@section('content')

<?php
$editProductsRoute=url("/editproduct/submit/{$products->num_products_pk}")
 ?>


<div class="card bg-light justify-content-center " style="width: 50rem;" id="addProduct">
  <img src="{{$products->txt_url_img}}" class="card-img-top" alt="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg">
  <div class="card-body d-flex justify-content-center ">
    <form method="post" action="{{$editProductsRoute}}">
      @csrf
      <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bd-highlight">
          Nombre: <input type="text" name="nombre" value="{{$products->txt_products_name}}">
        </div>
        <div class="p-2 bd-highlight">
          Url de Imagen: <input type="password" name="url" value="{{$products->txt_url_img}}">
        </div>
        <div class="p-2 bd-highlight">
          Descripcion:<input type="text" name="description" value="{{$products->txt_description}}">
        </div>
        <div class="p-2 bd-highlight">
            Precio: <input type="text" name="precio" value="{{$products->num_price}}">
        </div>
        <div class="p-2 bd-highlight">
        </div>

      </div>
      <button type="submit" class="btn btn-primary" name="button">
        Guardar
        <a href="" hidden >Ingresar</a>
      </button>
    </form>

  </div>
</div><br>
<br>


@endsection
