<?php


declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class People extends Model
{
    protected $fillable = ['title', 'body', 'author_id'];

    protected $table = 'people';

    use HasFactory;

    public function person()
    {
        $this->belongsTo('\Models\Person', 'person_id', 'id');
    }
}
