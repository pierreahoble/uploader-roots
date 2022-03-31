<?php

namespace App\Http\Controllers;

use App\Category;
use App\Souscategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.category');
    }


    public function add(REQUEST $request)
    {
       
        Category::create([
            'libelle' => request('libelle')
        ]);

        return redirect('fichier');
    }


    public function addsouscategorie()
    {
        return view('pages.souscategory',[
            'categories' => Category::all()
        ]);
    }


    public function insertsouscategorie(REQUEST $request)
    {
        Souscategory::create([
            'libelle' =>$request['libelle'],
            'category_id' =>$request['category'],
        ]);
        return redirect()->back();
    }


    //liste des categories et sous categories

    public function liste()
    {
       return view('pages.liste_categories',[
           'categories'=> Category::all(),
           'souscategories' => Souscategory::all()
       ]);
    }
}
