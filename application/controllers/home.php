<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index( )
    {
        $this->load-> view('html_header');
        $this->load-> view('header');
        $this->load-> view('menu_categorias');
        $this->load-> view('conteudo');
        $this->load-> view('rodape');
        $this->load-> view ('html_footer');
    }
}