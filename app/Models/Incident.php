<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = [
        'incident_uid',
        'incident_name',
        'incident_type_id',
        'steps',
        'incident_through',
        'state',
        'district',
        'village',
        'latitude',
        'longitude',
        'incident_date',
        'incident_time',
        'big_animals_died',
        'small_animals_died',
        'file_path',

        // Newly added columns
        'partially_house',
        'severely_house',
        'fully_house',
        'cowshed_house',
    ];

    /**
     * One Incident -> Many Human Losses
     */
    public function humanLosses()
    {
        return $this->hasMany(HumanLoss::class, 'incident_id');
    }

    /**
     * Incident Type Relationship
     */
    public function incidentType()
    {
        return $this->belongsTo(IncidentType::class, 'incident_type_id');
    }
}
