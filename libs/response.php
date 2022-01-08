<?php

namespace Lib;

class Response
{
    # json response static method
    public static function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

}