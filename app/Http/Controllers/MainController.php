<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\clarity;
use App\Models\color;
use App\Models\cut;
use App\Models\shape;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index(){
        $categories=Category::get();
        // return $categories;
        return view('category.index',compact('categories'));
    }
    public function create(){
        return view('category.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255|string',
            'is_active'=>'sometimes'
        ]);
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'is_active'=>$request->is_active ==true ?  1:0,
        ]);
        return redirect('categories/create')->with('status','craeted suessfully');
    }
    public function edit(int $id){
        $category=Category::findOrFail($id);
        // return $id;
        return view('category.edit',compact('category'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255|string',
            'is_active'=>'sometimes'
        ]);
        Category::findOrFail($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'is_active'=>$request->is_active ==true ?  1:0,
        ]);
        return redirect()->back()->with('status','updated suessfully');

    }
    public function delete(Request $request ,int $id){
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('status','deleted suessfully');

    }

}
