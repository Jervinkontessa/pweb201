<?php
/**
 *
 */
class Event_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function daftar_event()
  {
    /* SQL
      SELECT nama_event FROM `event`
    */

    $this->db->select('nama_event');
    $query = $this->db->get('event');
    return $query->result();
  }

  public function detail_event($where='')
  {
    /* SQL
    SELECT nama_event, info_event FROM music_jazz
    INNER JOIN event USING(kode_event)
    WHERE kode_event = 'BWI'
    */

    $this->db->select('*');
    $this->db->from('music_jazz m');
    $this->db->join('event e', 'ON(e.kode_event = m.id_event)');
    if ( $where != '' ) $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

}
?>
