<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\QueryBuilders\CategoriesQueryBuilder;
use Illuminate\Contracts\View\View;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(CategoriesQueryBuilder $categoriesQueryBuilder): View
    {
        $categoriesList = $categoriesQueryBuilder->getCategoryWithPagination();

        return \view('admin.categories.index', [
            'categoriesList' => $categoriesList,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(): View
    {
        return \view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse

    {
        $request->validate([
            'title' => 'required',
        ]);

        $categories = new Category($request->except('_token'));

        if ($categories->save()) {
            return \redirect()->route('admin.categories.index')->with('succes', 'Новость успешно добавлена');
        }
        return \back()->with('error', 'Не удалось сохранить запись');
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

    public function edit(Category $category): View
    {

        return \view('admin.categories.edit', [
            'category' => $category,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Category $category): RedirectResponse
    {
        $categories = $category->fill($request->except('_token'));

        if ($categories->save()) {
            return \redirect()->route('admin.categories.index')->with('succes', 'Новость успешно добавлена');
        }
        return \back()->with('error', 'Не удалось сохранить запись');
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
}
