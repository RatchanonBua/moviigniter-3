<?php
defined('BASEPATH') OR exit('NOT ALLOWED');

class Admin extends CI_Controller {
    var $template = array();

    public function index() {
        redirect('admin/user_list');
    }

    public function user_list() {
        $template['_navbar'] = $this->load->view('layouts/_navbar', [], TRUE);
        $template['content'] = $this->load->view('pages/admin', [], TRUE);
        $this->load->view('layouts/app', $template);
    }
}