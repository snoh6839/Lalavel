<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '<button>Tasks.index</button>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '<button>Tasks Create</button>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly = $request->only(['id', 'pw']);
        return 'id : '.$arrOnly['id'] . 'pw : ' . $arrOnly['pw'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id . '<button>Tasks show</button>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id . '<button>Tasks edit</button>';
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
        $arrAll = $request->all();
        
        $arrOnly = $request->only(['id','name']);
        $oneGet = $request->get('pw');
        var_dump($arrAll, $arrOnly, $oneGet);
        return 'request : '.$request."<br>id : ".$id."<br>arrOnly['id'] : ".$arrOnly['id']. '<br><button>Tasks update</button>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id . '<button>Tasks destroy</button>';
    }
}
