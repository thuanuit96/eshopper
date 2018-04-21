<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
include 'C:\xampp\htdocs\ATShop\simple_html_dom.php';

class DomController extends Controller
{

    function test()
    {
        $html = file_get_html('http://nhanhmua.vn/quan-ao.htm');
        foreach($html->find('img') as $element) {
            echo '<img src="'.$element->src.'" /><br>';
        }
//        foreach($html->find('a') as $element)
//            echo $element->href . '<br>';
     $tieude = $html->find('#flexnav',0);

        echo"<h1>$tieude->plaintext</h1>";

    }
}
