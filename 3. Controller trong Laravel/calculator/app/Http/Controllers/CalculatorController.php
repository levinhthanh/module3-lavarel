<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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


    public function result(Request $request){
        $data = $request->input("calculation");
        $element = [];
        $j = 0;
        for($i=0; $i<strlen($data); $i++){
            if($data[$i]==='+' || $data[$i]==='-' || $data[$i]==='*' || $data[$i]==='/'){
                $element[$j] = substr($data,0,$i);
                // echo($element[$j]).'<br>';
                $j++;
                $element[$j] = $data[$i];
                // echo($element[$j]).'<br>';
                $j++;
                $element[$j] = substr($data,$i+1);
                // echo($element[$j]).'<br>';
                if($element[1]==='+'){
                      $res = (int)$element[0] + (int)$element[2];
                }
                if($element[1]==='-'){
                      $res = (int)$element[0] - (int)$element[2];
                }
                if($element[1]==='/'){
                      $res = (int)$element[0] / (int)$element[2];
                }
                if($element[1]==='*'){
                      $res = (int)$element[0] * (int)$element[2];
                }
            }
        }
        return view('calculator.calculator',['res' => "$res",'display1' => 'none','display2' => 'block']);
    }
}
