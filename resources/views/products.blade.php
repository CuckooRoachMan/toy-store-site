@extends('navbar')

@section('content')

<div class="d-flex flex-wrap bd-highlight mb-3">
  <?php



  //echo $products as product->txt_products_name;

  foreach ($products as $p)
    {

    echo
    '
    <div class="p-2 bd-highlight">
      <div class="row" id="product_display">
        <div class="col-3" >
          <img src="'.$p->txt_url_img.'" alt="">
        </div>
        <div class="col float-left" >
          <p><b>'.$p->txt_products_name.' </b><p>
          <p>'.$p->txt_description.'</p>
          <price><p><b>L. '.$p->num_price.'</b></p><price>

        </div>

      </div>
    </div>

    ';
}

  ?>
</div>

@endsection
