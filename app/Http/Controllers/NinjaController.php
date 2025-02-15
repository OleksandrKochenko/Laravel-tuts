<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index(){
        // $ninjas = Ninja::orderBy('created_at', 'desc')->get(); // fetch all documents
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        return view('tuts.ninjas.ninjas', ['ninjas'=> $ninjas]);
    }

    public function create()
    {
        return view('tuts.ninjas.create');
    }

    public function show($id) {
        $ninja = Ninja::with('dojo')->findOrFail($id);
        return view('tuts.ninjas.show', ['ninja' => $ninja]);
    }
}
