<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\student;
class libraryhomecontroller extends Controller
{
//    public function index()
//    {
//        return view('library.libraryhome');
//    }

    public function index(){

        $libraryes = book::all();
        return view('library.libraryhome',compact('libraryes'));
    }

    public function destroy(library $library)
    {

        $library->delete();
        return view('library.libraryhome');
    }
    public function student(){

        $students = student::all();
        return view('library.libraryhome',compact('students'));
    }


//    public function destroy(libraryes $libraryes)
//    {
//        $libraryes->delete();
//        return back();
//    }
//    public function delete ( $libraryes){
//        $libraryes->delete();
//        $libraryes->student()->delete();
//
//
//        return back();
//
//    }
}
