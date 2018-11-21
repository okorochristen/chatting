<?php

namespace App\Http\Controllers;

use App\Profile;
use Auth;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{

    public function index(){

        $profiles=Profile::all();
        return view('profile.index',compact('profiles'));
    }

    public function create(){

        return view('profile.create');
    }
    public function view($id){
        $profiles = Profile::whereId($id)->first();
        return view('profile.view',compact('profiles'));
    }

    public function edit($id){
        $profiles = Profile::whereId($id)->first();
        return view('profile.edit',compact('profiles'));

    }


    public function update(ProfileRequest $request,  $id)

    {


        $profiles=Profile::find($id);
        $profiles->name=$request->input('name');
        $profiles->dob=$request->input('dob');
        $profiles->phone_no=$request->input('phone_no');
        $profiles->email=$request->input('email');
        $profiles->bio=$request->input('bio');
        // $profiles->profile_image=$tostore->input('profile_image');
        $profiles->country=$request->input('country');

        $profiles->save();
        return redirect('social/user');



    }


    public function store(ProfileRequest $request){

        $filename = $request->file('profile_image')->getClientOriginalName();

        $file=pathinfo($filename,PATHINFO_FILENAME);

        $ext =$request->file('profile_image')->getClientOriginalExtension();


        $tostore=$file . "_" . time() . "." . $ext;

        $path =$request->file('profile_image')->storeAs('public/upload', $tostore);



// this the modelname Profile
        $id =Auth::user()->id;
        $profiles=new Profile;
        //
            $profiles->name=$request->input('name');
            $profiles->dob=$request->input('dob');
            $profiles->phone_no=$request->input('phone_no');
            $profiles->email=$request->input('email');
            $profiles->bio=$request->input('bio');
            $profiles->country=$request->input('country');
            $profiles->profile_image=$tostore;
            $profiles->user_id=$id;



        $profiles->save();
        return redirect('social/user')->with('successful','created succesfully');

    }

    //     public function search(Request $request ){
    //         $user_id=Auth::user()->id;
    //         $keyword=$request->input('search');
    //         $profiles= Profile::where( 'email','%'.$keyword.'%')->get();
    //         return view('profile.search', ['Profile'=>$profiles]);
    //         // if($search!=''){
    //         //     $profiles=Profile::where('name','LIKE','%',$search.'%')
    //         //     ->orWhere('email', 'LIKE','%'.$search.'%')
    //         //     ->pagination(5)
    //         //     ->setpath('');
    //         //     $profiles->appends(array(
    //         //         'search'=> Input::get('search'),
    //         //     ));

    //         // }
    //         // find($user_id);

    //         // return view(‘profile.search’, [‘profile’=>$profiles]);

    // }


}
