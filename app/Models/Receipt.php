<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Receipt
 *
 * @property int $id
 * @property int $project_id
 * @property string $received_date
 * @property string $receiver_name
 * @property float $amount
 * @property int $hijri_received_day
 * @property int $hijri_received_month
 * @property int $hijri_received_year
 * @property string|null $description
 * @property int $user_id
 * @property string $document_path
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereDocumentPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereHijriReceivedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereHijriReceivedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereHijriReceivedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereReceivedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereUserId($value)
 * @mixin \Eloquent
 */
class Receipt extends Model
{
    use HasFactory;
}
