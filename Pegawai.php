<?php
class Pegawai{
    protected $nip;
    Public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';
    
    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;

    }
    public function setGajiPokok(){
        switch($this->jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            case 'Intern': $gapok = 2000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }
    public function setTunJab(){
        $TunJab = $this->setGajiPokok() * 0.2;
        return $TunJab;
    }
    public function setTunKel(){
        return ($this->status == 'Menikah') ? $this->setGajiPokok() * 0.1 : 0;
    }
    public function setGajiKotor(){
        return $this->setGajiPokok() + $this->setTunJab() + $this->setTunKel();
    }
    Public function setZakatProfesi(){
        return ($this->setGajiKotor() >= 6000000 && $this->agama == 'Islam') ? 0.025 * $this->setGajiKotor() : 0;
    }
    public function setGajiBersih(){
        return $this->setGajiKotor() - $this->setZakatProfesi();
    }



    public function cetak(){
        echo 'NIP Pegawai'.$this->nip;
        echo '<br>Nama Pegawai'.$this->nama;
        echo '<br>Jabatan'.$this->jabatan;
        echo '<br>Agama'.$this->agama;
        echo '<br>Status'.$this->status;
        echo '<br>Gaji Pokok Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan Rp.'.number_format($this->setTunJab(),0,',','.');
        echo '<br>Tunjangan Keluarga Rp.'.number_format($this->setTunKel(),0,',','.');
        echo '<br>Zakat Profesi Rp.'.number_format($this->setZakatProfesi(),0,',','.');
        echo '<br>Gaji Bersih Rp.'.number_format($this->setGajiBersih(),0,',','.');
        echo '<hr>';

    }
}

?>