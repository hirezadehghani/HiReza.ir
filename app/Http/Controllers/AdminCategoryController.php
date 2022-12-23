<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index() {
        return view('admin.categories.index', [
            'categories' => Category::paginate(50)
        ]);
    }
    
    public function create(){
        return view('admin.categories.create');
    }

    public function store (Request $request) {
        $category ??= new Category();
        $attributes = $this->validateCategory();

        Category::create($attributes);
        return back()->with('success', 'دسته بندی اضافه شد!');
    }

    public function edit(Category $category)
    {
        return view('admin/categories/edit', ['category' => $category]);
    }

    // for edit category and support patch

    public function update(Category $category)
    {
        $attributes = $this->validateCategory($category);
        $category->update($attributes);

        return redirect()->back()->with('success', 'دسته بندی با موفقیت ویرایش شد');
    }

    public function destroy (Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'دسته بندی با موفقیت پوکید!');
    }

    public function validateCategory(?Category $category = NULL)
    {
        $category ??= New Category();
        return request()->validate([
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
        ]);
    }
}
