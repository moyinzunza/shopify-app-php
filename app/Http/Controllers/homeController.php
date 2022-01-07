<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shopify\Utils;
use Shopify\Clients\Rest;
use Illuminate\Support\Facades\DB;
use DateTime;

class homeController extends Controller
{

    private $shop_url = env('APP_URL', '');
    public function index()
    {
        $data = array(
            "results" => array()
        );
        /** @var AuthSession */

        $shop_data = DB::table('sessions')->where('shop', $this->shop_url)->first();
        $client = new Rest($this->shop_url, $shop_data->access_token);
        $results = $client->get('products', [], ['limit' => 5]);

        $data["results"] = $results;
        return view('home', $data);
    }
}