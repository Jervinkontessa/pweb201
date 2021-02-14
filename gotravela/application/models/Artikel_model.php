<?php


 class Artikel_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }

  public function artikeldetails( $where='' )
  {
    $this->db->select('idartikel,judulartikel,tanggal,objekwisata.namawisata,kota.namakota,objekwisata.jamoperasional,objekwisata.alamat,objekwisata.harga,sumber');
    $this->db->join('objekwisata',' artikel.idwisata = objekwisata.idwisata');
    $this->db->join('kota',' objekwisata.kodekota = kota.kodekota');


    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get( 'artikel' );
    return $query->result_array();
  }

 }
