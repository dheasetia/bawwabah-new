<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MeetingDonation
 *
 * @property int $id
 * @property int|null $seq_num
 * @property int $meeting_id
 * @property int $office_id
 * @property string $description
 * @property int $amount
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereSeqNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingDonation whereUserId($value)
 * @mixin \Eloquent
 */
class MeetingDonation extends Model
{
    use HasFactory;
}
