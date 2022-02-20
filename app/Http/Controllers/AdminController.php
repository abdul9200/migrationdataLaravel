<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Copie;
use App\Models\Suggestion;
use App\Models\Etudiant;
use App\Models\Reservation;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function uploadcat(Request $request){

        $data=new category;
        $data->id=$request->id;
        $data->label=$request->label;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }
    public function uploadbook(Request $request){

        $data=new book;

        $data->title=$request->title;
        $data->author=$request->author;
        $data->edition=$request->edition;
        $data->date_edition=$request->date_edition;
        $data->ISBN=$request->ISBN;
        $data->book_image="a";
        $data->description=$request->description;
        $data->id_categorie=$request->category;

        $data->save();
        return redirect()->back();
    }
    public function addcat(){

        return view("admin.addcat");
    }
    public function addbook(){

        $data=Category::all();
        return view("admin.addbook",compact("data"));
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
    public function uploadcopy(Request $request){

        $data=new copie;

         $data->id=$request->id;
         $data->state="disponible";

         $data->book_id=$request->book;

         $data->save();
         return redirect()->back();
    }
     public function addcopy(){

                $data=Book::all();
                return view("admin.addcopy",compact("data"));
            }
    public function  copy(){

                $data=Copie::all()->load('book');
                return view("admin.copy",compact("data"));
            }
            public function suggestion(){

                $data=Suggestion::all()->load('user');
                return view("admin.suggestion",compact("data"));
            }
    public function deletesuggestion($id){

                $data=Suggestion::find($id);
                $data->delete();
                return redirect()->back();
    }
    public function  reservation(){

        $data=Reservation::all();
        $data->load('copie');
        $data->load('etudiant');

        return view("admin.reservation",compact("data"));
    }
    public function validateresa($id){
        $data = Reservation::find($id)->load('copie');
        $data->update(['state'=>'validee']);
        return redirect()->back();
    }
    public function terminateresa($id){
        $data=Reservation::find($id);
        $data->update(['state'=>'retenue']);
        $data1=Copie::find($data['copy_id']);
        $data1->update(['state'=>'disponible']);
        return redirect()->back();
    }





}
