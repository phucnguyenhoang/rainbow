<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public $language = ['kh' => 'cambodia', 'en' => 'english'];

    public function __construct() {
        parent::__construct();

        $this->load->helper('language');
    }

    public function home($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $this->load->view('layout/header', array('lang' => $lang, 'menu' => 'home', 'subHeader' => ''));
        $this->load->view('pages/home', array('lang' => $this->language[$lang]));
        $this->load->view('layout/footer', array('footerShadow' => true));
    }

    public function rainbowSystem($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'menu' => 'rainbow-system',
            'subHeader' => 'header-rainbowsystem.jpg',
            'headerText' => $this->lang->line('rainbow_system')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/rainbow-system');
        $this->load->view('layout/footer');
    }

    public function rainbowCambodia($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('rainbow_cambodia'),
            'menu' => 'rainbow-cambodia',
            'subHeader' => 'header-rainbowsystem.jpg',
            'headerText' => $this->lang->line('rainbow_cambodia')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/rainbow-cambodia');
        $this->load->view('layout/footer');
    }

    public function fullTime($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('full_time_opportunity'),
            'menu' => 'full-time-opportunity',
            'subHeader' => 'header-careers.jpg',
            'headerText' => $this->lang->line('careers')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/full-time');
        $this->load->view('layout/footer');
    }

    public function partTime($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('part_time_opportunity'),
            'menu' => 'part-time-opportunity',
            'subHeader' => 'header-careers.jpg',
            'headerText' => $this->lang->line('careers')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/part-time');
        $this->load->view('layout/footer');
    }

    public function university($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('college_university_student'),
            'menu' => 'college-university-student',
            'subHeader' => 'header-careers.jpg',
            'headerText' => $this->lang->line('college_university_student')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/university');
        $this->load->view('layout/footer');
    }

    public function product($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('our_product'),
            'menu' => 'our-product'
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/product');
        $this->load->view('layout/footer');
    }

    public function contact($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('contact'),
            'menu' => 'contact',
            'subHeader' => 'header-contact.jpg',
            'headerText' => $this->lang->line('contact')
        );
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/contact');
        $this->load->view('layout/footer');
    }

    public function demo($lang = 'en') {
        $this->lang->load('home', $this->language[$lang]);

        $headerData = array(
            'lang' => $lang,
            'title' => $this->lang->line('request_a_demonstration'),
            'menu' => 'request-demonstration',
            'subHeader' => 'header-demo.jpg',
            'headerText' => $this->lang->line('request_a_demonstration')
        );

        // progress post data
        $msg = '';
        $success = true;
        if ($this->input->method() == 'post') {
            $data = $this->input->post();
            //var_dump($data);die();
            if (empty($data)) {
                $msg = $this->lang->line('request_failed');
                $success = false;
            } else {
                $this->config->load('email');
                $emailConf = $this->config->item('email');
                $this->load->library('email', $emailConf);

                $this->email->clear();
                $this->email->from($emailConf['smtp_user'], $this->config->item('display_name'));
                $this->email->to($this->config->item('to'));
                $this->email->subject($this->config->item('title'));
                $content = $this->load->view('layout/demo-email', array('data' => $data), true);
                //echo $content; die();
                $this->email->message($content);

                $result = $this->email->send();
                if ($result) {
                    $msg = $this->lang->line('request_success');
                } else {
                    $msg = $this->lang->line('request_failed');
                    $success = false;
                }

                // send confirm email to user
                $this->email->clear();
                $this->email->from($emailConf['smtp_user'], $this->config->item('display_name'));
                $this->email->to($data['email']);
                $this->email->subject($this->lang->line('email_configuration_title'));
                $content = $this->load->view('layout/configuration-email-'.$lang, array('data' => $data), true);
                //echo $content; die();
                $this->email->message($content);

                $this->email->send();
            }
        }
        $this->load->view('layout/header', $headerData);
        $this->load->view('pages/demo', array('success' => $success, 'message' => $msg));
        $this->load->view('layout/footer');
    }
}
