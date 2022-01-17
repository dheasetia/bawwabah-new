<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReportPicture
 *
 * @property int $id
 * @property int $report_id
 * @property string|null $path
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportPicture whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReportPicture extends Model
{
    use HasFactory;
}
