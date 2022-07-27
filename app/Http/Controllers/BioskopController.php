<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BioskopController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/now_playing?api_key=688bac7352596ee7d3a6aaa8deb234b0';


        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());


        return view('now-playing', compact('responseBody'));
    }

    public function popular()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/popular?api_key=688bac7352596ee7d3a6aaa8deb234b0';


        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());


        return view('popular', compact('responseBody'));
    }

    public function topRated()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/top_rated?api_key=688bac7352596ee7d3a6aaa8deb234b0';


        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());


        return view('popular', compact('responseBody'));
    }

    public function upcoming()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/upcoming?api_key=688bac7352596ee7d3a6aaa8deb234b0';


        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());


        return view('popular', compact('responseBody'));
    }


    
}
