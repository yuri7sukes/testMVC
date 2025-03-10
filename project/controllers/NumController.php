<?php
namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller
{
    public function act($params)
    {
        $res = 0;
        $res += $params['n1'] + $params['n2'] + $params['n3'];
        echo $res;
    }
}