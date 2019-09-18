@extends('navbar')

@section('content')

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Id del Administrador</th>
      <th scope="col">Catalogo</th>
      <th scope="col">Fecha Agregado</th>
      <th scope="col">Ultima Actualizacion</th>
      <th scope="col">Editar</th>

    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($products as $p) {
        $prodructIdRoute=url("/editproduct/{$p->num_products_pk}");
        echo '
        <tr>
          <th scope="row">'.$p->num_products_pk.'</th>
          <td>'.$p->num_products_pk.'</td>
          <td>'.$p->txt_products_name.'</td>
          <td>'.$p->num_price.'</td>
          <td>'.$p->num_admins_fk.'</td>
          <td>'.$p->num_catalogs_fk.'</td>
          <td>'.$p->dat_creation.'</td>
          <td>'.$p->dat_lastedit.'</td>
          <td>
          <form method="get" action="'.$prodructIdRoute.'">
            <button type="submit">
              <i class="material-icons">
                edit
              </i>
            </button>
          </form>


          </td>
        </tr>

        ';


      }

     ?>
  </tbody>
</table>



  <?php

  foreach ($products as $p) {

  }


   ?>



@endsection
