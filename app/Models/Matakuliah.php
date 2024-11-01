<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'nama_mk', 'sks','semester'];

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class);
    }

    public function scopePencarian(Builder $query): void
    {
        if ($search = request('search')) {
            $query->where('kode_mk', 'like', '%' . $search . '%')
                  ->orWhere('nama_mk', 'like', '%' . $search . '%');

        }
    }
}
