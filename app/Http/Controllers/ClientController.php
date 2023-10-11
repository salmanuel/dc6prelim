<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    //
    public function index() {
        $clients = Client::get();

        return inertia('Clients/Index', [
            'clients' => Client::paginate(10)->through(fn($client) =>[
                'id' => $client->id,
                'last_name' =>$client->last_name,
                'first_name' =>$client->first_name,
                'address' =>$client->address,
            ])
        ]);
    }
}
