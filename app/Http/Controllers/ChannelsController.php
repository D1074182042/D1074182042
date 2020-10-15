<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    //
    public function index()
    {
        return view('channels.index');
    }
    public function create()
    {
        return view('channels.create');
    }

    public function show($id)
    {
        $data = [];
        if ($id == 5)
        {
            $data['name'] = "123";
            $data['guys'] = "123";
            $data['views'] = "123";
        } else {
            $data['name'] = "123";
            $data['guys'] = "123";
            $data['views'] = "123";
        }
        return view('channels.show', $data);

    }
    public function edit($id)
    {
        if ($id == 5)
        {
        $channel_name = "123";
        $channel_guys = "123";
        $channel_views = "123";
        } else {
        $channel_name = "123";
        $channel_guys = "123";
        $channel_views = "123";
        }
    return view('channels.edit')->with(['name' => $channel_name, 'guys' => $channel_guys, 'views' => $channel_views]);
    }
}
