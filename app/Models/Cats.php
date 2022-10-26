<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{

    protected $table = 'cats';

    protected $primaryKey = "id";
    
    protected $description = "description";

    protected $fillable = [
        "name",
        "address",
        "type",
        "tags",
        "rating",
        "description"
    ];
    public function scopeFilter($query, array $filters)
    {
        if ($filters["tag"] ?? false){
            $query->where("tags", "like", "%" . request("tag") . "%");
        }

        if ($filters["search"] ?? false){
            $query->where("name", "like", "%" . request("search") . "%")
                        ->orwhere("tags", "like", "%" . request("search") . "%");
        }
    }

}

