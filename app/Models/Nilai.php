<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'tb_nilai';
    protected $fillable = [
    	'id',
    	'nim',
    	'nama',
    	'prodi',
    	'mata_kuliah',
    	'nilai'
    ];
}


