<?php
defined('BASEPATH') OR exit('NOT ALLOWED');

class Review extends CI_Controller {
    var $template = array();

    public function index() {
        $template['_navbar'] = $this->load->view('layouts/_navbar', [], TRUE);
        $template['content'] = $this->load->view('pages/review', [], TRUE);
        $this->load->view('layouts/app', $template);
    }
}