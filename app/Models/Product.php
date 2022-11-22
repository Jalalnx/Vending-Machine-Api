<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $item_name
 * @property string $manufactory
 * @property int $count
 * @property int $price_plane_id
 * @property int $saller_id
 * @property string|null $note
 * @property string|null $production_date
 * @property string|null $Validity_expiration_date
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereManufactory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePricePlaneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSallerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereValidityExpirationDate($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory; //Prunable
    // use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $guarded = [];
}