<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $creator_id
 * @property int|null $is_draft
 * @property string|null $subject
 * @property string|null $body
 * @property int|null $parent_id
 * @property string|null $expiry_date
 * @property string|null $attachment
 * @property string|null $hijri_created_day
 * @property string|null $hijri_created_month
 * @property string|null $hijri_created_year
 * @property int|null $is_deleted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereHijriCreatedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereHijriCreatedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereHijriCreatedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    use HasFactory;
}
