<?php

declare(strict_types=1);

namespace App\QueryBuilders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoriesQueryBuilder extends QueryBuilder
{
   private Builder $model;

   public function  __constract()
   {
      $this->model = Category::query();
      $this->model = Category::paginate();
   }

   public function getCategoryWithPagination(int $quantity=10):LengthAwarePaginator

   {
      return  Category::paginate($quantity);
   }

   function getCollection(): Collection
   {
      return Category::query()->get();
   }
}
