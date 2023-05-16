<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = [
            [
                'title' => 'Dc Comics',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Dc',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Sites',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Shop',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
        ];
    
        $mainLinks = config('mainbottomlinks');
        $comics = Comic::all();
        return view('home', compact('links','comics', 'mainLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $formdata = $request->all();
        $newComic = new Comic();
        $newComic->fill($formdata);
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $links = [
            [
                'title' => 'Dc Comics',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Dc',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Sites',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
            [
                'title' => 'Shop',
                'linkSingoli' => [
                    'testo1', 'testo2', 'testo3'
                ]
            ],
        ];
        return view('comics/show', compact('comic', 'links'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
