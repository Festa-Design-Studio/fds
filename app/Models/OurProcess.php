<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'icon',
        'order_index',
        'is_active',
        'step_number',
        'detailed_content',
        'metric_type',
        'metric_value',
        'metric_label',
        'show_metric',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order_index' => 'integer',
        'step_number' => 'integer',
        'show_metric' => 'boolean',
    ];

    // Scopes for different process types
    public function scopePhilosophy($query)
    {
        return $query->where('type', 'philosophy')->where('is_active', true)->orderBy('order_index');
    }

    public function scopeMethodology($query)
    {
        return $query->where('type', 'methodology')->where('is_active', true)->orderBy('order_index');
    }

    public function scopeImpact($query)
    {
        return $query->where('type', 'impact')->where('is_active', true)->orderBy('order_index');
    }

    // Get items by type
    public static function getByType($type)
    {
        return static::where('type', $type)
            ->where('is_active', true)
            ->orderBy('order_index')
            ->get();
    }

    // Constants for process types
    const TYPE_PHILOSOPHY = 'philosophy';
    const TYPE_METHODOLOGY = 'methodology';
    const TYPE_IMPACT = 'impact';

    public static function getTypes()
    {
        return [
            self::TYPE_PHILOSOPHY => 'Philosophy Principles',
            self::TYPE_METHODOLOGY => 'Methodology Steps',
            self::TYPE_IMPACT => 'Impact Metrics',
        ];
    }
}
