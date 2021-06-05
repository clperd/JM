<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package JustMining
 *
 * @property int id
 * @property string name
 * @property string description
 * @property float price
 */
class Product extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
