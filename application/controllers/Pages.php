<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public $language = ['ca' => 'cambodia', 'en' => 'english'];

    public function __construct() {
        parent::__construct();

        $this->load->helper('language');
    }

    public function home($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'home'));
        $this->load->view('welcome_message', array('lang' => $this->language[$lang]));
        $this->load->view('layout/footer');
    }

    public function rainbowSystem($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'rainbow-system'));
        $this->load->view('layout/footer');
    }

    public function rainbowCambodia($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'rainbow-cambodia'));
        $this->load->view('layout/footer');
    }

    public function fullTime($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'full-time-opportunity'));
        $this->load->view('layout/footer');
    }

    public function partTime($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'part-time-opportunity'));
        $this->load->view('layout/footer');
    }

    public function university($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'colleague-university-student'));
        $this->load->view('layout/footer');
    }

    public function product($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'our-product'));
        $this->load->view('layout/footer');
    }

    public function contact($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'contact'));
        $this->load->view('layout/footer');
    }

    public function demo($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'request-demonstration'));
        $this->load->view('layout/footer');
    }
}
