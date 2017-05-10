<?php

namespace App\Http\Controllers;

use App\Sheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // ユーザのID取得
        $id = Auth::id();
        $sheets = Sheet::orderBy('start_at', 'asc')->get();

        return view('sheet.index', [
            'sheets' => $sheets
        ]);
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
        $sheet = new Sheet;
        $sheet->name = $request->name;
        $sheet->user_id = Auth::id();
        $sheet->description = $request->description;
        $sheet->start_at = $request->start_at;
        $sheet->end_at = $request->end_at;
        $sheet->save();


        return redirect('/sheet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ユーザのID取得
       
        $sheet = Sheet::find($id);


        //
        return view('sheet.show',['sheet'=>$sheet]);
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
