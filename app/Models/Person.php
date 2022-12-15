<?php
namespace App\Models;

;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Person extends Model
{
    protected $fillable =['firstname','lastname','person_id'];

    protected $table='People';

    use HasFactory;
    public function articles():HasMany
    {
        return $this->hasmany('\Models\Person','person_id','id');
    }
}
