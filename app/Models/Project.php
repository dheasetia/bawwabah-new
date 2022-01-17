<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property int|null $id_at_balahmar
 * @property string|null $hijri_created_day
 * @property string|null $hijri_created_month
 * @property string|null $hijri_created_year
 * @property string $name
 * @property string $description
 * @property int $donation_requested
 * @property int|null $audience_num
 * @property float|null $donation_approved
 * @property string|null $donation_purpose
 * @property float|null $material_donation_approved
 * @property string|null $material_donation_detail
 * @property string|null $material_donation_purpose
 * @property string|null $responsible_person
 * @property string|null $mobile
 * @property string|null $email
 * @property int $office_id
 * @property int $user_id
 * @property int $kind_id
 * @property int $city_id
 * @property string|null $execution_date
 * @property string|null $hijri_execution_day
 * @property string|null $hijri_execution_month
 * @property string|null $hijri_execution_year
 * @property string $document_path
 * @property int $approval_status
 * @property int|null $other_project_donated_id
 * @property string|null $pending_reason
 * @property string|null $requested_detail
 * @property string|null $approval_date
 * @property string|null $hijri_approval_day
 * @property string|null $hijri_approval_month
 * @property string|null $hijri_approval_year
 * @property string|null $ban_reason
 * @property string|null $video_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereApprovalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereApprovalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereAudienceNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereBanReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDocumentPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDonationApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDonationPurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDonationRequested($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereExecutionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriApprovalDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriApprovalMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriApprovalYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriCreatedDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriCreatedMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriCreatedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriExecutionDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriExecutionMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHijriExecutionYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIdAtBalahmar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereKindId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialDonationApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialDonationDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialDonationPurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereOtherProjectDonatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePendingReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereRequestedDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereResponsiblePerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereVideoLink($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;
}
