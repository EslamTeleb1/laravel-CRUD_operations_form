<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
// use Illuminate\Ruoting\controller;


class islam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //2- $person = array("name"=>"Islam", "age"=>"37");

        // return view('new',$person);

        // 1-return "hello";  ['name' => 'Islam Tolba',]
        
        // DB::insert('insert into users (id ,NAME,USER_NAME,PASSWORD,EMAIL) values (?,?,?,?,? )',array("3","islam","ts","ts","ts"));
        // DB::insert('insert into users (id ,NAME,USER_NAME,PASSWORD,EMAIL) values (?,?,?,?,? )',array("4","islam Tolba","ts","ts","ts"));

        $users = DB::select('select * from users');
           return $users;




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
