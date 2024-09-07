<?php

namespace App\Http\Controllers;

use App\Services\Product\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * menampilkan halaman file
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $disk = Storage::disk('public');
        $directory = 'export';
        $files = $disk->files($directory);

        $fileData = array_map(function ($file) use ($disk) {
            return [
                'name' => basename($file),
                'url' => $disk->url($file),
            ];
        }, $files);

        return view('apps.file.index', ['files' => $fileData]);
    }

    /**
     * menampilkan detail
     * @param $filename
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($filename)
    {
        $data['products'] = $this->productService->read_file($filename)->getResult();
        return view('apps.file.detail', $data);
    }
}
