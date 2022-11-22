<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use illuminate\Database\Eloquent\SoftDeletes;
/**
 * App\Models\order_items
 *
 * @property int $id
 * @property string $item_name
 * @property string $manufactory
 * @property int $amount
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|order_items newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order_items newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order_items query()
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereManufactory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_items whereUserId($value)
 * @mixin \Eloquent
 */
class order_items extends Model
{
   
    use HasFactory;
    // use SoftDeletes;
      protected $dates = ['deleted_at']; 
    
    protected $guarded = [];
}