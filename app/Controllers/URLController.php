<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Stmt\Return_;

class URLController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function urlShortener()
    {
        $prevShortcode = "";
        $prevLongURL = "";
        $displayShorURL = "display:none;";

        if($this->request->getMethod() == "POST"){
            $shortcode = $this->getURLShortcode();
            $long_url = $this->request->getPost("long_url");

            $tableObject = $this->db->table("urls");

            $tableObject->insert(array(
                "long_url" => $long_url,
                "shortcode" => $shortcode
            ));

            $prevShortcode = $shortcode;
            $prevLongURL = $long_url;
            $displayShorURL = "display:block;";
        }

        return view("url-shorter.php", array(
            "shortcode" => $prevShortcode,
            "longurl" => $prevLongURL,
            "displayShorURL" => $displayShorURL
        ));
    }

    private function getURLShortcode(){
        $stringPattern = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $shufflePattern = str_shuffle(($stringPattern));

        return substr($shufflePattern, 0, 6);
    }

    public function handleShortURLs($segment){
        $shortcode = $segment;
        $tableObject = $this->db->table("urls");

        $urlExists = $tableObject->select("long_url")->where("shortcode", $shortcode)->get()->getRowArray();

        if(!empty($urlExists)){
            $tableObject->update([
                "is_open" => "1"
            ], [
                "shortcode" => $shortcode
            ]);
            return redirect()->to($urlExists['long_url']);
        }
        else{
            echo json_encode(array(
                "status" => false,
                "message" => "short url not found"
            ));
            exit;
        }
    }
}
