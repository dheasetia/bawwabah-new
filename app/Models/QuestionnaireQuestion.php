<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuestionnaireQuestion
 *
 * @property int $id
 * @property string $question
 * @property int $questionnaire_id
 * @property int|null $seq_num
 * @property int|null $is_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereIsDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereSeqNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireQuestion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuestionnaireQuestion extends Model
{
    use HasFactory;
}
