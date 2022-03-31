<?php

namespace App\Http\Controllers;

use App\Category;
use App\Fichier;
use App\Souscategory;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.index',[
            'categories' => $categories
        ]);
    }



    public function add(REQUEST $request)
    {
        
        if ($request->file('file')) {
            //return request('file');



            $file = $request->file('file');
            $filename = $file->getClientOriginalName();//File name
            // File extension
            $extension = $file->getClientOriginalExtension();
            $location = 'files/'.$request['cat'] ;
    
    
            // Upload file
            //  $file->move($location,$filename);
             $request->file->move(public_path($location), $filename);
            // $filepath = $request->file('file')->storeAs($location,$filename,'public');
            $filepath = $location.'/'.$filename;

           $myfile = Fichier::create([
            'nom_fichier' => $filename,
            'url_fichier' => $filepath,
            'description_fichier' =>$request['description']
           ]);
            
        }

        return redirect()->back() ;
    }

    public function liste()
    {
        $files = Fichier::all();
        return view('pages.liste',[
            'files'=> $files
        ]);
    }

    public function voir($id)
    {
       return view('pages.voir',[
           'file' => Fichier::find($id)
       ]);
    }

    public function addmany(REQUEST $request)
    {
        //return $request;

        if ($request->file('file')) {
            //return request('file');
            $file = $request->file('file');
            foreach ($file as $key => $value) {

                $location = 'files/'.$request['cat_'.$key] ;
                
                $filename = $file[$key]->getClientOriginalName();
                $file[$key]->move(public_path($location), $filename);
                $filepath = $location.'/'.$filename;

                    $myfile = Fichier::create([
                    'nom_fichier' => $filename,
                    'url_fichier' => $filepath,
                    'description_fichier' =>$request['description_'.$key]
                    ]);
            }

        }

        return redirect()->back();

    }


    //show le fichier a modifier
    public function show($id)
    {
       return view('pages.show',[
           'file' => Fichier::findOrfail($id)
       ]);
    }

    //persister les donnees à modifier dans la base de donnees
    public function update(REQUEST $request)
    {
       Fichier::find($request->id)->update([
           'description_fichier'=>$request->description
       ]);
   

       return redirect('liste');
    }




    public function ajax_souscategorie($id)
    {
        return $id;
    }



}
