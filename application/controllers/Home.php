<?php
defined('BASEPATH') OR exit('NOT ALLOWED');

class Home extends CI_Controller {
    var $template = array();

    public function index() {
        $template['_navbar'] = $this->load->view('layouts/_navbar', [], TRUE);
        $template['content'] = $this->load->view('pages/home', [
            "_typebar" => $this->load->view('layouts/_typebar', [], TRUE),
            "_searchbar" => $this->load->view('layouts/_searchbar', [], TRUE)
        ], TRUE);
        $this->load->view('layouts/app', $template);
    }
}
