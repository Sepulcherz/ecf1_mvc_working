<?php

class Contact extends Controller
{
    function index()
    {
        $data['page_title'] = "Contact Me";
        $this->view("contact", $data);
    }
}
