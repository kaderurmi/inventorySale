<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.dashboard.category-page');
    }//End Method

    function CategoryList(Request $request){
        $user_id=$request->header('id');
        return Category::where('user_id', $user_id)->get();
    }//End Method

    function CategoryCreate(Request $request){
        $user_id=$request->header('id');
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id
        ]);
    }//End Method

    function CategoryDelete(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->delete();
    }//End Method


    function CategoryByID(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->first();
    }//End Method



    function CategoryUpdate(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->update([
            'name'=>$request->input('name'),
        ]);
    }//End Method








}//End Main Method
