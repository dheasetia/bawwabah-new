<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Kind
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kind newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kind newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kind query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kind whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kind whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kind whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kind whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Kind extends Model
{
    use HasFactory;
}
