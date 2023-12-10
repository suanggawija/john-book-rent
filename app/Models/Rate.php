<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table ='rate';
    protected $fillable = [
        'author_id',
        'book_id',
        'rate',
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
