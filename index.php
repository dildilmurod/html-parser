<?php
include_once ('curl_q.php');
include_once ('simple_html_dom.php');
        $html = c_get('http://lepestock.uz/');

    $dom = \simplehtmldom_1_5\str_get_html($html);

        //file_put_contents('1',$html);

    $products = $dom->find('.product-title');

    foreach ($products as $prod){

        $a = $prod->find('a', 0);

        $first = c_get($a->href);
        $name = $prod->plaintext;
        file_put_contents(
            substr_replace(
                $name,
                "",
                (strpos($name, " ")),
                strlen($name)-strpos($name, " ")
            ), $first);








    }





