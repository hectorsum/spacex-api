<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class spaceX extends Controller{
  function fetchData() {
    $client = new  \GuzzleHttp\Client();
    // $guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
    // $client->setHttpClient($guzzleClient);
    $response = $client->request('GET','http://api.spacexdata.com/v4/launches',['verify' => false]);
    if($response->getStatusCode()==200){
      $apidata = json_decode($response->getBody()->getContents(),true);
      // $apidata = array_column($apidata,'details');
      $apidata = array_column($apidata,'links');
      $apidata = array_column($apidata,'flickr');
      $apidata = array_column($apidata,'original');
      $apidata = array_filter($apidata); //* returns only true values;
      return view('data',['apidata' => $apidata]);
    }
    return view('data',['apidata' => $apidata]);
  }
}
