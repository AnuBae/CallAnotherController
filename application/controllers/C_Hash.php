<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hash extends CI_Controller
{
    public $data;

    function __construct()
    {
        $this->data = "Hash";
    }
    public function index()
    {
        echo $this->data;
    }

    public function CallData()
    {
        return $this->data;
    }
}
