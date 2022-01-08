<?php

namespace App;

# base api controller class
class Controller
{
    # add nesessary api functions
    public function __construct()
    {

    }

    # convert array response to json and stop execution
    public function response($data)
    {
        # convert array response to json
        echo json_encode($data);
        # stop execution
        exit;
    }

}