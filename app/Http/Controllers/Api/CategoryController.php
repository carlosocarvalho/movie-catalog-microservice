<?php

namespace App\Http\Controllers\Api;

use App\Entities\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $rules = [
        'name' => 'required|max:255',
        'is_active' => 'boolean'
    ];

    
    public function index()
    {
        return Category::all();
    }


    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $category = new Category();
        $category->fill($request->all());
        $category->save();

        return $category;
    }


    public function show(Category $category)
    {
        return $category;
    }


    public function update(Request $request, Category $category)
    {
        $this->validate($request, $this->rules);
        $category->fill($request->all());
        $category->save();
        return $category;
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent();
    }
}
