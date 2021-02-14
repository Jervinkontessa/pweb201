<?php

use Restserver\Libraries\REST_Controller;

class Artikel extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('artikel_model');
  }

  public function artikeldetails_get()
  {
    $where = '';
    if( null !== $this->get('id') ){
      $artikel = $this->get('id');
      $where = "idartikel LIKE '" . $artikel."'";
    }

   $data = $this->artikel_model->artikeldetails( $where );
   $this->response( [ 'artikel' => $data ], 200 );
  }




}
