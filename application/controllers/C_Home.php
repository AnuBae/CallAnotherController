<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{
    public function index()
    {
        echo "<a href=" . base_url('C_Hash') . ">Test</a>";
        echo "<br>";

        // // call controller in controller
        $this->load->library('../controllers/C_Hash');
        $this->obj = new C_Hash();
        echo $this->obj->CallData();
    }
}
