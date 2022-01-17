<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectApproval
 *
 * @property int $id
 * @property int $project_id
 * @property int $user_id
 * @property string|null $time_approval
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereTimeApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectApproval whereUserId($value)
 * @mixin \Eloquent
 */
class ProjectApproval extends Model
{
    use HasFactory;
}
