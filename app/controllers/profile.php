<?php

class Profile extends Controller
{
    function index()
    {
        
        $data['page_title'] = "Profile";
        $this->view("profile", $data);
    }
}
