<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];

    // Function untuk filter data pelanggan

    public function scopeFilter(
        Builder $query,
        $request,
        array $filterableColumns
    ): Builder {
        foreach ($filterableColumns as $column) {
            if ($request->filled($column)) {
                $query->where($column, $request->input($column));
            }
        }

        return $query;
    }

    // Function untuk search data pelanggan
    public function scopeSearch(
        Builder $query,
        $request,
        array $searchableColumns
    ): Builder {
        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($query) use ($search, $searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $query->orWhere($column, 'LIKE', "%{$search}%");
                }
            });
        }

        return $query;
    }
}
