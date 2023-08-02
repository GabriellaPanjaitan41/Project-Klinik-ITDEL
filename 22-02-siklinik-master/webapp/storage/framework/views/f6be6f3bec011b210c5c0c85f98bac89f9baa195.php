<div class="modal-header">
    <h5 class="modal-title">Export Excel</h5>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
        <i class="las la-times"></i>
    </div>
</div>
<div class="modal-body">
    <form id="form_input_modal" action="<?php echo e(route('medicine.excel')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-12 mb-5">
                <label for="condition" class="required form-label">Pilih Tanggal</label>
                <div class="input-group">
                    <select data-control="select2" data-placeholder="Pilih Tanggal" id="date" name="date"
                        class="form-select form-select-solid">
                        <option SELECTED DISABLED>Pilih Tanggal</option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->year . '-' . $item->month); ?>">
                                <?php echo e($item->year . '-' . $item->month); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="min-w-150px mt-10 text-end">
                <button id="tombol_simpan_modal" type="submit"
                    onclick="handle_export_modal('#tombol_simpan_modal','#modalListResult');"
                    class="btn btn-sm btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
<script>
    obj_select('date', 'Pilih Tanggal');
</script>
<?php /**PATH C:\xampp\htdocs\klinik\klinik\resources\views/pages/medicine/input_export_excel.blade.php ENDPATH**/ ?>