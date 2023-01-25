<?php
declare(strict_types=1);

namespace App\Http\Controllers;

trait NewsTrait
{
    public function getNewsList(int $categoryid): array
    {
        $news = [];
        $quantityNews = 10;

        for ($i = 1; $i < $quantityNews; $i++) {
            $news[$i] = [
                'id' => $i,
                'title' => \fake()->jobTitle(),
                'description' => \fake()->text(100),
                'autor' => \fake()->userName(),
                'created_at' => \now()->format('d-m-Y H:i'),
                'category' => $categoryid
            ];
        }
        return $news;
    }

    public function getNews(int $id): array
    {
        return [
            'id' => $id,
            'title' => \fake()->jobTitle(),
            'description' => \fake()->text(100),
            'autor' => \fake()->userName(),
            'created_at' => \now()->format('d-m-Y H:i'),
        ];
    }

}