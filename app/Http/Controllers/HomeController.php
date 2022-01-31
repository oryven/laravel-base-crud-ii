<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comic;

class HomeController extends Controller
{
    public function home() {

        $Comics = comic::all();

        return view('pages.home', compact('Comics'));
    }

    public function comic($id) {

        $comic = comic::findOrFail($id);

        return view('pages.comic', compact('comic'));
    }

    public function create() {

        return view('pages.create');
    }
    public function store(Request $request) {

        $data = $request -> validate ([
            'title' => 'required | string',
            'author' => 'required | string',
            'pages' => 'required',
            'release_date' => 'required | date',
        ]);

        $comic = comic::create($data);
        return redirect() -> route('home');
    }

    public function edit($id) {

        $comic = comic::findOrFail($id);
        return view('pages.edit', compact('comic'));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate ([
            'title' => 'required | string',
            'author' => 'required | string',
            'pages' => 'required',
            'release_date' => 'required | date',
        ]);

        $comic = comic::findOrFail($id);
        $comic -> update($data);
        return redirect() -> route('home');
    }
}
