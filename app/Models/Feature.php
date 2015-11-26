<?php

namespace Cars\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $fillable = ['name'];

    public static function filterNewFeatures($features)
    {
        $features = array_filter($features, function ($value) {
            return !is_numeric($value);
        });

        $features = array_map('trim', $features);

        $features = array_unique($features);

        $features = array_filter($features, function ($value) {
            return strlen($value) >= 2;
        });

        $existingFeatures = static::whereIn('name', $features)->lists('name')->toArray();

        return array_diff($features, $existingFeatures);
    }

    public static function addNewFeatures($features)
    {
        $newFeatures = static::filterNewFeatures($features);

        foreach ($newFeatures as $feature) {
            static::create(['name' => $feature]);
        }
    }
}
