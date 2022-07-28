<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleGenerator extends Model
{
    use HasFactory;

    public function getTableColumns($table_name) {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($table_name);
    }
}
