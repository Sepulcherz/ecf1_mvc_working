<?php

class Home extends Controller
{
    function index()
    {
        $data['page_title'] = "Home";

        $posts = $this->loadModel("posts");
        $result = $posts->get_all();

        $data['posts'] = $result;
        $this->view("index", $data);
    }
}
