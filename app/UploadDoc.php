<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadDoc extends Model
{
    protected $table = 'upload_doc_customer';

    protected $fillable = ['cust_code','cust_name','image','doc_type'];
}
