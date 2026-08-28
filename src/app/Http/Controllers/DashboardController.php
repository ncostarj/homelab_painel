<?php

namespace App\Http\Controllers;

// use HealthCheckServices;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {

        // $response = (new HealthCheckServices)
        //     ->setServices([
        //         'homelab.home',
        //         'portainer.home',
        //         'n8n.home',
        //         'jobcon.home',
        //         'rpa.home',
        //         'financeiro.home',
        //         'pihole.home',
        //         'ollama.home',
        //         'casaos.home',
        //     ])
        //     ->check();


        return view('dashboard');
    }
}
