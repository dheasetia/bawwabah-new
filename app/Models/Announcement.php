<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Announcement
 *
 * @property int $id
 * @property int|null $creator_id
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $expiry_date
 * @property string|null $attachment
 * @property string|null $hijri_created_day
 * @property string|null $hijri_created_month
 * @property string|null $hijri_created_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereHijriCreatedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereHijriCreatedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereHijriCreatedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Announcement extends Model
{
    use HasFactory;
}
