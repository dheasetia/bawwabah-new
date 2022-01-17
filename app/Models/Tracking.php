<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tracking
 *
 * @property int $id
 * @property int $user_id
 * @property string $ip
 * @property string $activity
 * @property string|null $type
 * @property int|null $model_id
 * @property string|null $slug
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tracking whereUserId($value)
 * @mixin \Eloquent
 */
class Tracking extends Model
{
    use HasFactory;
}
