<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Etudiant;
use App\Models\Copy;
use App\Models\Suggestion;
class AdminController extends Controller
{
    public function uploadcat(Request $request){

        $data=new category;
        $data->id=$request->id;
        $data->description=$request->description;
        $data->label=$request->label;
        $data->save();
        return redirect()->back();

    }
    public function uploadbook(Request $request){
        $data=new book;

        $data->title=$request->title;
        $data->author=$request->author;
        $data->edition=$request->edition;
        $data->date_edition=$request->dateEdition;
        $data->ISBN=$request->ISBN;
        $data->id_categorie=$request->category;
        $data->description=$request->description;
        $data->book_image=$request->image;
        $data->save();
        return redirect()->back();
    }
    public function uploadcopy(Request $request){
       $data=new copy;

        $data->id=$request->id;
        $data->state=0;

        $data->book_id=$request->book;

        $data->save();
        return redirect()->back();
            }
    public function user(){
        $data=Etudiant::all();
        return view("admin.user",compact("data"));
    }

    public function addcat(){
        return view("admin.addcat");
    }
    public function addbook(){
        $data=Category::all();
        return view("admin.addbook",compact("data"));
    }
    public function addcopy(){
        $data=Book::all();
        return view("admin.addcopy",compact("data"));
    }

    public function showDetails($id){
        $data=Etudiant::find($id);
        return view("admin.userDetails", compact('data'));
    }

    public function deleteuser($id){
        $data=Etudiant::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletesuggestion($id){
        $data=Suggestion::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function category(){
        $data=Category::all();
        return  view("admin.category",compact("data"));
    }
    public function deletecategory($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function  book(){
        $data=Book::all()->load('category');
        return view("admin.book",compact("data"));
    }
    public function suggestion(){
        $data=Suggestion::all()->load('etudiant');
        return view("admin.suggestion",compact("data"));
    }
    public function  copy(){
        $data=Copy::all()->load('book');
        return view("admin.copy",compact("data"));
    }
    public function  deletebook($id){
        $data=Book::find($id);
        $data->delete();
        return redirect()->back();
    }

}
