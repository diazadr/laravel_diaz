<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bioModel extends Model
{
    use HasFactory;

    protected $table='bio_models';
    protected $fillable=['nama','nis','kelas','tmtlhr','tgllhr','email'];

    public function scopeFilter($query) 
    {
        if(request('search')) {
            return $query->where('nama', 'like', '%' . request('search').'%')
            ->orWhere('nis', 'like', '%' . request('search').'%');
        }
        
        //carakedua
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('nama','like','%' . $filters['search']. '%' )
        //     ->orWhere('nis','like','%' . $filters['search']. '%' );
            // ->orWhere('nis','like','%' . request('saerch'). '%')
            // ->orWhere('kelas','like','%' . request('saerch'). '%')
            // ->orWhere('tmtlhr','like','%' . request('saerch'). '%')
            // ->orWhere('tgllhr','like','%' . request('saerch'). '%')
            // ->orWhere('email','like','%' . request('saerch'). '%');
        // }

        
    }
}
