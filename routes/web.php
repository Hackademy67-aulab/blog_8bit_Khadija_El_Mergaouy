<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})-> name('homepage');

Route::get('/about', function () {
    return view('aboutus');
})-> name('aboutus');

Route::get('/products', function () {
    
    $products = [
        
        ['id'=>'1','name'=>'Super Mario Bros','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 37.99','img'=>'/media/img5.png'],
        ['id'=>'2','name'=>'The legend of Zelda','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 17.87','img'=>'/media/img7.png'],
        ['id'=>'3','name'=>'Arkanoid','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 45.65','img'=>'/media/img2.png'],
        ['id'=>'4','name'=>'ET Phone Home','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 1987.99','img'=>'/media/img4.png'],
        ['id'=>'5','name'=>'8Bit Fiesta','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ sedicenti','img'=>'/media/img1.png'],
        ['id'=>'6','name'=>'Pac Man','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 92.99','img'=>'/media/img8.png'],
    ];
    
    return view('products', compact('products'));
    
})-> name('products');


Route::get('/productdetails/{id}', function ($id) {
    
    $products = [
        
        ['id'=>'1','name'=>'Super Mario Bros','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 37.99','img'=>'/media/img5.png'],
        ['id'=>'2','name'=>'The legend of Zelda','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 17.87','img'=>'/media/img7.png'],
        ['id'=>'3','name'=>'Arkanoid','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 45.65','img'=>'/media/img2.png'],
        ['id'=>'4','name'=>'ET Phone Home','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 1987.99','img'=>'/media/img4.png'],
        ['id'=>'5','name'=>'8Bit Fiesta','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ sedicenti','img'=>'/media/img1.png'],
        ['id'=>'6','name'=>'Pac Man','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ad!','price'=>'€ 92.99','img'=>'/media/img8.png'],
    ];
    
    foreach($products as $product){
        if ($product['id']==$id) {
            return view('productdetails', compact('product'));
        }
    } 
})-> name('productdetails');


