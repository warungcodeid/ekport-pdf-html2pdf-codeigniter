<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_Model extends CI_Model {
public function view(){
return $this->db->get('siswa')->result();
}

public function view_row(){
return $this->db->get('siswa')->result();
}
}
