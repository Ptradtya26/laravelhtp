<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi';//ini pemanggilan nama table
    protected $primarykey = 'id';//ini contoh pemanggilan id atau primary keynya
    protected $fillable = ['nama'];//ini pemanggilan kolom pada table

    public function pegawai(){
        return $this->hasMany(Pegawai::class);//memanggil relasi antara table divisi dengan table pagawai one to many
    }
}
