<?php
defined('BASEPATH') OR exit('NOT ALLOWED');

class Movie extends CI_Controller {
    var $template = array();

    public function create_movie() {
        $template['_navbar'] = $this->load->view('layouts/_navbar', [], TRUE);
        $template['content'] = $this->load->view('pages/movie', [], TRUE);
        $this->load->view('layouts/app', $template);
    }
}