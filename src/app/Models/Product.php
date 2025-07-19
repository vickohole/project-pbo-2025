<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
?>