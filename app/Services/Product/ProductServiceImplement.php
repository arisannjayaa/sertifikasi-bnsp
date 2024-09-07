<?php

namespace App\Services\Product;

use App\Exports\ProductExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\Product\ProductRepository;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Reader;
use Yajra\DataTables\Facades\DataTables;

class ProductServiceImplement extends ServiceApi implements ProductService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
    protected $title = "Produk";


//     protected $create_message = "";
//     protected $update_message = "";
    protected $delete_message = "Berhasil dihapus";

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(ProductRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function table()
    {
        return DataTables::of($this->mainRepository->table())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $html = '<span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg></button>
                              <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item edit" href="javascript:void(0)" data-id="'.$row->kode_produk.'">
                                  Edit
                                </a>
                                <a class="dropdown-item delete" href="javascript:void(0)" data-id="'.$row->kode_produk.'">
                                  Hapus
                                </a>
                              </div>
                            </span>';
                return $html;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create($data)
    {
        DB::beginTransaction();
        try {
            $this->mainRepository->create($data);

            DB::commit();
            return $this->setStatus(true)
                ->setCode(200)
                ->setMessage("Produk berhasil ditambahkan");
        } catch (Exception $e) {
            DB::rollBack();
            return $this->exceptionResponse($exception);
        }
    }

    public function update($id, array $data)
    {
        DB::beginTransaction();
        try {
            unset($data['id']);
            $this->mainRepository->update($id, $data);

            DB::commit();
            return $this->setStatus(true)
                ->setCode(200)
                ->setMessage("Produk berhasil diperbaharui");
        } catch (Exception $e) {
            DB::rollBack();
            return $this->exceptionResponse($exception);
        }
    }

    public function export_csv()
    {
        $fileName = 'products_' . now()->format('Y_m_d_H_i_s') . '.csv';
        $path = 'export/' . $fileName;
        Excel::store(new ProductExport, $path, 'public', \Maatwebsite\Excel\Excel::CSV);
        Storage::url($path);

        return $this->setStatus(true)
            ->setCode(200)
            ->setMessage("File berhasil diexport");
    }

    public function read_file($filename)
    {
        $disk = Storage::disk('public');
        $filePath = 'export/' . $filename;

        if (!$disk->exists($filePath)) {
            abort(404);
        }

        $file = $disk->path($filePath);
        $handle = fopen($file, 'r');

        // Baca header
        $header = fgetcsv($handle);

        // Baca semua baris
        $rows = [];
        while (($data = fgetcsv($handle)) !== FALSE) {
            $rows[] = $data;
        }
        fclose($handle);

        if (!$header) {
            $header = ['Column 1', 'Column 2', 'Column 3'];
        }

        $result = ['header' => $header, 'rows' => $rows];

        return $this->setStatus(200)
            ->setCode(200)
            ->setResult($result);
    }
}
