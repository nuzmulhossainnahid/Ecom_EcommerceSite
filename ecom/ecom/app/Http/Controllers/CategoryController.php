<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        return view('admin.category.add');
    }


    public function create(Request $request)
    {
        return $request->all();
    }



    public function manage()
    {
        return view('admin.category.manage');
    }


    public function edit($id)
    {
        return view('admin.category.edit');
    }



    public function update(Request $request, $id)
    {
        return $request->all();
    }



    public function delete(Request $request)
    {
        return $request->all();
    }




}
