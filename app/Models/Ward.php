<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ward extends Model
{
    use HasFactory;

    public function getAllData() {
        return DB::table('wards')
            ->where('disabled', 0)
            ->get();
    }
    public function getData($id) {
        return DB::table('wards')
            ->where('disabled', 0)
            ->where('id', $id)
            ->first();
    }

    public function insertData($data) {
        return DB::table('wards')->insert($data);
    }
    public function updateData($data, $id) {
        return DB::table('wards')
            ->where('id', $id)
            ->update($data);
    }
    public function softDeleteData($data, $id) {
        return DB::table('wards')
            ->where('id', $id)
            ->update($data);
    }
    public function deleteData($id) {
        return DB::table('wards')
            ->where('id', $id)
            ->delete();
    }
}
