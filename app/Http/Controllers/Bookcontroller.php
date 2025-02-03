<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    //
    public function index(){
        return view("book.create");
    }
    public function create(Request $request){
$name = $request->name;
$description = $request->description;
$price = $request->price;

$data = [
    "name"=> $name,
    "description"=> $description,
    "price" => $price
];

        Book::create($data);
        return view( 'book.success');
    }

}
