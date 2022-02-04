<?php

class Upload extends Controller
{
    function index()
    {
        $data['page_title'] = "Upload";

        $post = $this->loadModel("upload_article");
        $post->upload($_POST);

        $this->view("upload", $data);
    }
}
