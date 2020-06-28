<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "admin";

    protected $fillable = ['foto_admin','nama_admin', 'alamat_admin', 'notelp_admin', 'username_admin', 'password_admin'];
}
