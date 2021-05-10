<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClient;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ClientController extends Controller
{
    public function index()
    {
       $data = Client::paginate(1);
        return response()->json($data);
    }

    public function create(StoreClient $request)
    {
        $data = Client::create($request->all());
        return $data->toArray();

    }

    public function edit($id)
    {
        $client = Client::find($id);
        return response()->json($client);

    }

    public function update($id, Request $request)
    {
        $client = Client::find($id);
        $client->update($request->all());

        return response()->json('The post successfully updated');

    }

    // delete post
    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();

        return response()->json('The post successfully deleted');
    }

    public function CsvExport()
    {
        $list = Client::all()->toArray();

        return response()->json($list);

    }
}
