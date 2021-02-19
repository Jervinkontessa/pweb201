<?php
use Restserver\Libraries\REST_Controller;

class Events extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('event_model');
  }

  public function eventlist_get()
  {
    $data  = $this->event_model->daftar_event();
    $this->response( [ 'event' => $data ], 200 );
  }

  public function eventdetail_get()
  {
    $where = '';
    if (null !== $this->get('id')) {
      $event = $this->get('id');
      $where = "m.id_event LIKE '" . $event . "'" ;
    }
    $data = $this->event_model->detail_event($where);
    $this->response( [ 'event' => $data ], 200 );
  }

}

 ?>
