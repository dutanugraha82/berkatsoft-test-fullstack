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
        $movies = $responseBody->results;
        return view('now-playing', compact('movies'));
    }

    public function popular()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/popular?api_key=688bac7352596ee7d3a6aaa8deb234b0';

        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());
        $movies = $responseBody->results;
        return view('popular', compact('movies'));
    }

    public function topRated()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/top_rated?api_key=688bac7352596ee7d3a6aaa8deb234b0';

        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());
        $movies = $responseBody->results;
        return view('top-rated', compact('movies'));
    }

    public function upcoming()
    {
        $client = new Client();
        $url    = 'https://api.themoviedb.org/3/movie/upcoming?api_key=688bac7352596ee7d3a6aaa8deb234b0';

        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());
        $movies = $responseBody->results;
        return view('upcoming', compact('movies'));
    }

    public function detail($id)
    {


        $client = new Client();
        $url    = "https://api.themoviedb.org/3/movie/".$id."?api_key=688bac7352596ee7d3a6aaa8deb234b0";

        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());
        $movies = $responseBody;
        // dd($movies);
        return view('detail', compact('movies'));
    }


    
}
