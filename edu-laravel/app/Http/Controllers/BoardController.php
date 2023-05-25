<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardSelect = DB::select('select * from categories');
        $no = '5';
        $boardUserSelectNo = DB::select('select * from categories where no = :no', ['no' => $no]);

        $inputCateNoArr = ['4', '7', '8'];

        //게시글 번호, 게시글 제목, 카테고리명 출력 (게시글 번호 정렬 상위 5개)
        $boardUserSelectInfo = DB::table('boards')
            ->join('categories', 'boards.category', '=', 'categories.no')
            ->select('boards.bno', 'boards.btitle', 'categories.name')
            // ->where('boards.category', $inputCateNoArr[0])
            // ->orwhere('boards.category', $inputCateNoArr[1])
            // ->orwhere('boards.category', $inputCateNoArr[2])
            ->whereIn('boards.category', $inputCateNoArr)
            ->orderBy('boards.bno')
            ->limit(5)
            ->get();

        return var_dump($boardUserSelectInfo);
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
