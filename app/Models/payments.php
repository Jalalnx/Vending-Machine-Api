<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\payments
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|payments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|payments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|payments query()
 * @method static \Illuminate\Database\Eloquent\Builder|payments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|payments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|payments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class payments extends Model
{
    use HasFactory;
    // use SoftDeletes;
      protected $dates = ['deleted_at'];
}