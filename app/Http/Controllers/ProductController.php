<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Http\Requests\ProductRequest;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * menampilkan halaman produk
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        return view('apps.product.index');
    }

    /**
     * mendapatkan data table
     * @return mixed
     */
    public function table()
    {
        return $this->productService->table();
    }

    /**
     * membuat produk
     * @param ProductRequest $request
     * @return string
     */
    public function create(ProductRequest $request)
    {
        $data = $request->only(['nama_produk','harga_produk','tgl_produksi','tgl_expired']);
        return $this->productService->create($data)->toJson();
    }

    /**
     * menampilkan produk sesuai id
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->productService->findOrFail($id)->toJson();
    }

    /**
     * memperbahui produk
     * @param ProductRequest $request
     * @return mixed
     */
    public function update(ProductRequest $request)
    {
        $data = $request->only(['kode_produk','nama_produk','harga_produk','tgl_produksi','tgl_expired']);
        return $this->productService->update($data['kode_produk'], $data)->toJson();
    }

    /**
     * menghapus produk
     * @param Request $request
     * @return mixed
     */
    public function delete(Request $request)
    {
        return $this->productService->delete($request->id)->toJson();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export_file()
    {
        return Excel::download(new ProductExport(), 'product.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);
    }

    /**
     * export file csv
     * @return mixed
     */
    public function export_csv()
    {
        return $this->productService->export_csv()->toJson();
    }


}
