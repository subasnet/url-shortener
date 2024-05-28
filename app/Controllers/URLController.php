<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class URLController extends BaseController
{
    public function urlShortener()
    {
        return view("url-shorter.php");
    }
}
