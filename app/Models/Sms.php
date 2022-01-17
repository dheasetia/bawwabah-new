<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sms
 *
 * @property int $id
 * @property int|null $creator_id
 * @property string|null $subject
 * @property string|null $text
 * @property string|null $hijri_created_day
 * @property string|null $hijri_created_month
 * @property string|null $hijri_created_year
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sms newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereHijriCreatedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereHijriCreatedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereHijriCreatedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sms whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sms extends Model
{
    use HasFactory;
}
