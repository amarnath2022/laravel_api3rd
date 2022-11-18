<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;
//use Illuminate\Support\facades\DB;
use App\Models\api;

class PostController extends Controller
{
public function index1()
{
    //call apis
    $posts =Http::get("https://jsonplaceholder.typicode.com/posts");
    //return  json_decode($posts);
    return view("Posts",[
        "posts"=>json_decode($posts),
       // "posts"=>$posts->paginate(3)
    ]);

}
function index2(Request $req)
{
    $url="https://jsonplaceholder.typicode.com/posts";
    $response =Http::get($url);
    $data=json_decode($response->body());
    foreach($data as $api)
    {
        $api=(array)$api;
        api::updateorCreate(
            ['id'=>$api['id']],
            [
                'id'=>$api['id'],
               'userid'=>$api['userid'],
                'title'=>$api['title'],
            ]
            );
           }
    echo"saved";
    
}
function show()
{
 // echo"hi from show";
 $data=api::paginate(10);
  //$data=api::all();
 // print_r($data);
  return view('list',['xyz'=>$data]);
 
}




}
