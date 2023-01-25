<?php
declare(strict_types=1);

namespace App\Http\Controllers;

trait CategoryTrait
{
    public function getCategory(): array
    {
        $category = [];
        $quantityCategory = 6;
        for ($i = 1; $i < $quantityCategory; $i++) {
            $category[$i] = [
                'id' => $i,
                'title' => \fake()->jobTitle(),

            ];
        }
        return $category;
    }
}