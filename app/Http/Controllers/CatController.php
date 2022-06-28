<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Cats;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $cats= Cat::all();
        //dd($cats);

        //return $cats;

        return view('admitlte', [
            'cats' => $cats
        ]);
    }

    public function show($id)
    {
       //echo $id;
      $cats= Cat::findOrFail($id);

      return view('cats/show',[
        'cat' =>$cats
      ]);

    }


    public function create()
    {
        return view('cats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'desc' => 'reuqired',
        ]);
        Cat::create([
            'name' => $request->name,
            'desc' => $request->desc,

        ]);

        return redirect(url('/cats'));
    }




    public function edit($id)
    {
        $cat= Cat::findOrFail($id);
        return view('cats/edit', [
            'cat' => $cat,
        ]);
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'desc' => 'reuqired',
        ]);
        
        $cat= Cat::findOrFail($id)->update([
            'name'=> $request->name,
            'desc'=>$request->desc,
        ]);

        return redirect(url('/cats'));
    }

    public function delete($id)
    {
        $cat= Cat::findOrFail($id)->delete();

        return redirect(url('/cats'));
    }

   

}
