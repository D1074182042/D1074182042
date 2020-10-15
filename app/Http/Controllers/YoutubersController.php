<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutubersController extends Controller
{
    //
    public function index()
    {
        return view('youtubers.index');
    }
    public function create()
    {
        return view('youtubers.create');
    }
    public function show($id)
    {
        $data = [];
        if ($id == 5)
        {
            $data['name'] = "123";
            $data['country'] = "123";
            $data['position'] = "123";
        } else {
            $data['name'] = "123";
            $data['country'] = "123";
            $data['position'] = "123";
        }
        return view('youtubers.show')->with('youtuber_id', $id);
    }
    public function edit($id)
    {
        if ($id == 5)
        {
            $youtuber_name = "";
            $youtuber_country = "";
            $youtuber_position = "";
        } else {
            $youtuber_name = "";
            $youtuber_country = "";
            $youtuber_position = "";
        }
        $data = compact('youtuber_name', 'youtuber_country', 'youtuber_position');

        return view('youtubers.edit', $data);
    }



}
