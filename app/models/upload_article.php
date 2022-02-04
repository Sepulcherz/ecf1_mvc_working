<?php

class Upload_article
{

    function upload($POST)
    {

        $DB = new Database();

        if (isset($POST['description'])) {

            $arr['description'] = $POST['description'];
            $arr['url_address'] = get_random_string_max(60);
            $arr['date'] = date("Y-m-d H:i:s");

            $query = "insert into articles (description,url_address,date) values (:description,:url_address,:date)";
            $data = $DB->write($query, $arr);
            if ($data) {

                header("Location:" . ROOT . "home");
                die;
            }
        }
    }
}
