<?php

namespace Allutomotive\Http\Controllers;

use Allutomotive\Profile;
use foo\bar;
use Illuminate\Http\Request;
use Allutomotive\User;
use Laravel\Scout\Searchable;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'about' => 'required',
            'slug' => 'required',
            'email' => 'required',
            'profile_pic'=>'required'
        ]);

        $input['profile_pic'] = time().'.'.$request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('images'), $input['profile_pic']);
        $input['about']= $request->about;
        $input['email']=$request->email;
        $input['slug']=$request->email;
        $input['user_id']= auth()->id();

        Profile::create($input);

        return view('/home')
            ->with('success','Successfully created profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Allutomotive\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profiles.show',[
            'profileUser' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Allutomotive\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Allutomotive\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Allutomotive\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::find($id)->delete();

        return back()
            ->with('success', 'Profile Deleted');
    }


}
