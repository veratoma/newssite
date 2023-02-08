<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;

    protected $table = 'news';
     public function getNews(): array  
 
     {
       return \DB::select("select id, title, autor, description, status, created_at from {$this->table}");

     }

     public function getNewsById(int $id): mixed    
 
     {
        return \DB::selectOne("select id, title, autor, description, status, created_at from {$this->table} where id =:id",  [
            'id' => $id,
        ]);
     }
}
