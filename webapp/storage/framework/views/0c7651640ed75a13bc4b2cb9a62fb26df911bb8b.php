<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h6>
                        <?php if($data->id): ?>
                            Ubah
                        <?php else: ?>
                            Tambah
                        <?php endif; ?>
                        Data Obat
                    </h6>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="back();" class="btn btn-sm btn-primary">Kembali</button>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <form id="form_input">
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Nama Obat</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan Nama Obat..." value="<?php echo e($data->name); ?>">
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Jenis/Sediaan Obat</label>
                            <select class="form-control" id="type" name="type">
                                <option>Pilih Sediaan Obat</option>
                                <option value="TABLET" <?php echo e($data->type == 'TABLET' ? 'selected' : ''); ?>>Tablet</option>
                                <option value="BOTOL" <?php echo e($data->type == 'BOTOL' ? 'selected' : ''); ?>>Botol</option>
                                <option value="BOX" <?php echo e($data->type == 'BOX' ? 'selected' : ''); ?>>Box</option>
                                <option value="PCS" <?php echo e($data->type == 'PCS' ? 'selected' : ''); ?>>Pcs</option>
                                <option value="TUBE" <?php echo e($data->type == 'TUBE' ? 'selected' : ''); ?>>Tube</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Jumlah/Stok</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="Masukkan Jumlah Obat..." value="<?php echo e($data->quantity); ?>">
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Kategori Obat</label>
                            <input type="text" class="form-control" id="category" name="category"
                                placeholder="Masukkan Kategori Obat..." value="<?php echo e($data->category); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            <?php if($data->id): ?>
                                <button id="tombol_simpan"
                                    onclick="handle_save('#tombol_simpan','#form_input','<?php echo e(route('medicine.update', $data->id)); ?>','PATCH');"
                                    class="btn btn-sm btn-primary">Simpan</button>
                            <?php else: ?>
                                <button id="tombol_simpan"
                                    onclick="handle_save('#tombol_simpan','#form_input','<?php echo e(route('medicine.store')); ?>','POST');"
                                    class="btn btn-sm btn-primary">Simpan</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\klinik\resources\views/pages/medicine/input.blade.php ENDPATH**/ ?>