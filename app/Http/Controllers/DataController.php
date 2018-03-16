<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function showData() {
    $data = Data::all();
    return view('allData', ['data' => $data]);
  }
  public function addData() {
    return view('dataForm');
  }
  public function insertData(Request $request) {
    //dd($request);
    $data = new Data();
    $data->type = $request->type;
    $data->content = $request->content;
    $data->save();
    return redirect('/');
  }
  public function update(Request $request) {
    $item = Data::find($request['id']);

    return view('update', ['item' => $item]);
  }
  public function updated(Request $request) {
    $item = Data::find($request->input('id'));
    $item->type = $request->type;
    $item->content = $request->content;
    $item->save();
    return redirect('/');
  }
  public function delete(Request $request) {
    Data::destroy($request->input('id'));
    return redirect('/');
  }
}
