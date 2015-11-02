<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public $language = ['ca' => 'cambudia', 'en' => 'english'];

    public function __construct() {
        parent::__construct();

        $this->load->helper('language');
    }

    public function home($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header');
        $this->load->view('welcome_message', array('lang' => $this->language[$lang]));
        $this->load->view('layout/footer');
    }
}
