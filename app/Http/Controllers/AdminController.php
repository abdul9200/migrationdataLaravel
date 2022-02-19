<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Suggestion;
class AdminController extends Controller
{
    public function uploadcat(Request $request){

        $data=new category;
        $data->id=$request->id;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }
    public function uploadbook(Request $request){
        $data=new book;

        $data->title=$request->title;
        $data->author=$request->author;
        $data->edition=$request->edition;
        $data->dateEdition=$request->dateEdition;
        $data->ISBN=$request->ISBN;
        $data->category_id=$request->category;

        $data->save();
        return redirect()->back();
    }
    public function user(){
        $data=User::all();
        return view("admin.user",compact("data"));
    }
    public function addcat(){
        return view("admin.addcat");
    }
    public function addbook(){
        $data=Category::all();
        return view("admin.addbook",compact("data"));
    }
    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function suggestion(){
        $data=Suggestion::all();
        return view("admin.suggestion",compact("data"));
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
    public function  deletebook($id){
        $data=Book::find($id);
        $data->delete();
        return redirect()->back();
    }

}
