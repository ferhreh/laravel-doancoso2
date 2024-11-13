<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuocHoa extends Model
{
    use HasFactory;
    protected $table = 'nuoc_hoa';

    protected $fillable = [
        'thuongHieu', 'name', 'gioiTinh', 'nongDo', 'dungTich', 'doLuuHuong', 'doToaHuong', 'giaTienLon', 'giaTienNho', 'dungTichNho','image',
    ];
}
