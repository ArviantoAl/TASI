<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langinv extends Model
{
    use HasFactory;
    protected $table = 'langganan_invoices';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'invoice_id',
        'pelanggan_id',
        'layanan_id',
        'langganan_id',
        'harga_satuan'
    ];
    public function layanan(){
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }
    public function pelanggan(){
        return $this->belongsTo(User::class, 'pelanggan_id');
    }
    public function langganan(){
        return $this->belongsTo(Langganan::class, 'langganan_id');
    }
}
