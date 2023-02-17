<?php

declare(strict_types=1);

namespace App\QueryBuilders;
use App\Models\Sourses;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


class SoursesQueryBuilder extends QueryBuilder
{
    {
      public Builder $model;
    
       public function  __constract()
       {
          $this->model = Sourses::query();
       }
     

       function getCollection(): Collection
    {
      return Sourses::query()->get();
    }
    }
}