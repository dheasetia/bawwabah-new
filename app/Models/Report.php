<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Report
 *
 * @property int $id
 * @property string|null $hijri_created_day
 * @property string|null $hijri_created_month
 * @property string|null $hijri_created_year
 * @property string $name
 * @property int $nth
 * @property int $project_id
 * @property int $user_id
 * @property int $office_id
 * @property string|null $document_path
 * @property string|null $file_type
 * @property string|null $video_link
 * @property string $report_from
 * @property string|null $hijri_report_from_day
 * @property string|null $hijri_report_from_month
 * @property string|null $hijri_report_from_year
 * @property string $report_to
 * @property string|null $hijri_report_to_day
 * @property string|null $hijri_report_to_month
 * @property string|null $hijri_report_to_year
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereDocumentPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriCreatedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriCreatedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriCreatedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportFromDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportFromMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportFromYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportToDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportToMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHijriReportToYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereNth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereReportFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereReportTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereVideoLink($value)
 * @mixin \Eloquent
 */
class Report extends Model
{
    use HasFactory;
}
