<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuestionnaireAnswer
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property int|null $rating
 * @property int|null $choice_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereChoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionnaireAnswer whereUserId($value)
 * @mixin \Eloquent
 */
class QuestionnaireAnswer extends Model
{
    use HasFactory;
}
