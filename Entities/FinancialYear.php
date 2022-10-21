<?php

namespace Luanardev\Lumis\Calendar\Entities;

use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'calendar_financial_year';

    /**
     * Primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'start_date', 'end_date', 'status'];
    
    /**
     * Search Scope for Laravel Livewire DataTable
     * @var Illuminate\Database\Eloquent\Builder $query
     * @var string $term
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(
            fn ($query) => $query->where('code', 'like', "%{$term}%")
        );
    }

    /**
     * @var string $term
     */
    public static function search($term)
    {
       return static::where('code', 'like', "%{$term}%")->get();
    }

    /**
     * Status
     *
     * @return string
     */
    public function statusBadge()
    {
        return (strtolower($this->status) == strtolower('active'))?
            "<span class='badge badge-success'>{$this->status}</span>":
            "<span class='badge badge-secondary'>{$this->status}</span>";
    }

    /**
     *
     * @param string $code
     * @return self
     */
    public static function findByCode($code)
    {
        return static::where('code', $code)->first();
    }

    /**
     *
     * @return self
     */
    public static function getCurrentYear()
    {
        return static::where('status', 'Active')
            ->pluck('code')
            ->first();
    }
    
    
}
