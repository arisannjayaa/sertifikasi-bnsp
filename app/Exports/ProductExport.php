<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }

    /**
     * Menambahkan header ke file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'kode_produk',
            'nama_produk',
            'harga_produk',
            'tgl_produksi',
            'tgl_expired',
            'created_at',
            'updated_at',
        ];
    }
}
