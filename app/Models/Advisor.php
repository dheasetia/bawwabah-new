<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advisor
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advisor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Advisor extends Model
{
    use HasFactory;
}
