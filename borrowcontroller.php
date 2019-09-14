<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\book;
use App\student;
class borrowcontroller extends Controller
{
    //

//    public function index(){
//        $students = student::all();
//        return view('library.borrow',compact(students));
//    }

    public function index (){

        $students = student::all();
        return view('library.Borrowed',compact('students'));
    }

//    public function borrow(){
//
//        $student = student::all();
//        return view ('libraryhome.borrow',compact('student'));
//    }

//    public function show(student $student){
//
//        return view('library.Borrowed',compact('student'));
//
//    }

//    public function book($id){
//
////        $update = student::orderBy('created_at','asc')->get();
//        $update = student::find($id);
//        return view('library.borrow',compact('update'));
//
//    }

//
//    public function update(Request $request , $id){
//
//        $update = student::find($id);
//        $update->name = $request->input('username');
//        $update->borrow_or_not = $request->input('borrow');
//        $update->count_of_days = $request->input('dayes');
//        $update->save();


//        student::where('id' ,  $id)->update([
//        $update->name = $request->input('username'),
//        $update->borrow_or_not = $request->input('borrow'),
//        $update->count_of_dayes = $request->input('dayes')
//        ]);
//
//        return view('library.borrow');
//}

    public function store(){

        student::create(request(['borrow','dayes','username']));
//        $student->name = $request->input('username');
//        $student->password =Hash::make($request->input('password')) ;
//        $student->email = $request->input('email');
//        $student->borrow_or_not = $request->input('borrow');
//        $student->count_of_dayes = $request->input('dayes') ;

//        $student->save();
        return view('library.Borrowed');

    }

    public function edit (students $students){
        $students = student::all();
        return view('library.Borrowed',compact('students'));
    }

        public function update(students $students){

            $students->update(request([
                'borrow_or_not'=>request()->has('borrow'),
                'count_of_dayes'=>request()->has('dayes'),
                'name'=>request()->has('username')
            ]));

//            $students->borrow_or_not = request('borrow');
//            $students->count_of_dayes = request('dayes') ;
//            $students->save();

            return redirect('/Borrowed');

        }

}


//return view ('library.borrow')->with('students',$students);