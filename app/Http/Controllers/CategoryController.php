<?php
declare(strict_types=1);
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CategoryController extends Controller
{

     use CategoryTrait;
     use NewsTrait;

    public function index()
    {
        return \view('category.index', ['category' => $this->getCategory()]);
     }

     public function show(int $categoryid)  
     {
        return \view('category.show', ['news' => $this->getNewsList($categoryid)]);
     }  

}
