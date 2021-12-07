<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Province extends Model
{
    use HasFactory;

    public function getAllData() {
        return DB::table('provinces')->where('disabled', 0)->get();
    }
}
