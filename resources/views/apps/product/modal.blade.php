<div class="modal modal-blur fade" id="modal-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-product">
                <div class="modal-body">
                    <input type="hidden" name="kode_produk" id="kode_produk" value="">
                    <div class="mb-3">
                        <label class="form-label required">Nama</label>
                        <div>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Komputer" name="nama_produk" id="nama_produk">
                            <small class="form-hint">Nama produk</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Harga Produk</label>
                        <div>
                            <input type="text" class="form-control convert-currency" aria-describedby="emailHelp" placeholder="Rp 10.000" name="harga_produk" id="harga_produk">
                            <small class="form-hint">Tentukan harga produk</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Produksi</label>
                        <div class="input-icon mb-2">
                            <input class="form-control " placeholder="Select a date" id="tgl-production" value="2020-06-20" name="tgl_produksi">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Expired</label>
                        <div class="input-icon mb-2">
                            <input class="form-control " placeholder="Select a date" id="tgl-expired" value="2020-06-20" name="tgl_expired" >
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" id="btn-submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
