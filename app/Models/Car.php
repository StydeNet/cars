<?php

namespace Cars\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'car_feature');
    }

    public function getFeaturesAttribute()
    {
        return $this->features()->lists('feature_id')->toArray();
    }

    public function saveFeatures(array $features)
    {
        $features = Feature::whereIn('id', $features)->orWhereIn('name', $features)->get();
        $this->features()->sync($features);
    }
}
