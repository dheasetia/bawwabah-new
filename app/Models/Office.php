<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Office
 *
 * @property int $id
 * @property int|null $id_at_balahmar
 * @property int $user_id
 * @property string $name
 * @property string|null $description
 * @property int $advisor_id
 * @property string|null $manager_name
 * @property string|null $license_no
 * @property string|null $license_date
 * @property int $bank_id
 * @property string $iban
 * @property string $representative
 * @property string|null $role
 * @property string $mobile
 * @property string $phone
 * @property string|null $second_phone
 * @property string|null $fax
 * @property string $email
 * @property string|null $website
 * @property string|null $logo
 * @property int $is_banned
 * @property int $is_active
 * @property int $is_approved
 * @property int|null $is_suspended
 * @property int $area_id
 * @property int $city_id
 * @property string|null $street
 * @property string|null $district
 * @property string|null $building_no
 * @property string|null $additional_no
 * @property string|null $po_box
 * @property string $zip_code
 * @property string|null $coordinate
 * @property string|null $ban_reason
 * @property string|null $note
 * @property string|null $license_file
 * @property string|null $bank_file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Advisor $advisor
 * @property-read \App\Models\Area $area
 * @property-read \App\Models\Bank $bank
 * @property-read \App\Models\City $city
 * @property-read mixed $approval_status
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAdditionalNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAdvisorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereBanReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereBankFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereBuildingNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCoordinate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIdAtBalahmar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIsBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIsSuspended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLicenseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLicenseFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLicenseNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereManagerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office wherePoBox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereRepresentative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereSecondPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereZipCode($value)
 * @mixin \Eloquent
 */
class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'advisor_id',
        'manager_name',
        'license_date',
        'bank_id',
        'iban',
        'representative',
        'mobile',
        'phone',
        'second_phone',
        'fax',
        'email',
        'website',
        'logo',
        'area_id',
        'city_id',
        'street',
        'district',
        'building_no',
        'additional_no',
        'po_box',
        'zip_code',
        'coordinate'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function advisor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Advisor::class);
    }

    public function bank(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function area(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function getApprovalStatusAttribute(): string
    {
        return $this->is_approved == 0 ? 'لم تتم' : 'تمت';
    }

    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function projects(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Project::class);
    }

}
