<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';//inipemanggilan nama table
    protected $primarykey = 'id';//ini contoh pemanggilan id atau primary keynya
    protected $fillable = ['nama'];//ini pemanggilan kolom pada table

    public function pegawai(){
        return $this->hasMany(Pegawai::class);//memanggil relasi antara table jabatan dengan table pagawai atau one to many
    }
}
