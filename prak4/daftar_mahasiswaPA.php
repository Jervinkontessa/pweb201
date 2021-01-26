<?php
/**
 *
 */
class daftar_mahasiswaPA
{
  public $nim;
  public $nama;
  public $nidn_pa;
  public $dosen_pa;

  public function Mahasiswabypa($dosen_pa)
   {
   $this->$dosen_pa = $dosen_pa;
   $this->initMahasiswanbypa();


   }

  private function initMahasiswanbypa()
  {
  $listmhs = new Daftar_mahasiswa();
  $mhs = $listmhs->getMahasiswaByPA($this->dosen_pa);

  $this->nama = $mhs['nama'];
  $this->nim = $mhs['nim'];
  $this->dosen_pa = $mhs['dosen_pa'];

  }
}





 ?>
