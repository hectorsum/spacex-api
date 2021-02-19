<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Rocket extends Controller{
  function fetchData() {
    $client = new  \GuzzleHttp\Client();
    $response = $client->request('GET','https://api.spacexdata.com/v4/rockets',['verify' => false]);
    if($response->getStatusCode()==200){
      $rocketdata = json_decode($response->getBody()->getContents(),true);
      $rocketdata = array_column($rocketdata,'flickr_images');
      $rocketdata = array_filter($rocketdata); //* returns only true values;
      // var_dump($rocketdata);
      return view('rocket',['rocketdata' => $rocketdata]);
    }
    return view('rocket',['rocketdata' => $rocketdata]);
  }
}
