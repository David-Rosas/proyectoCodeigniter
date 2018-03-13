<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contactos extends CI_Controller {

        public function index()
        {
                //echo 'hola mundo!';
                $data['nombre']= 'joel';
                $data['nombre_2'] ='Bachi 2';
                $this->load->view('view_list_contactos',$data);
        }
}
/* Fin del Archivo Contactos.php */