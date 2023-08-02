<div class="modal-header">
    <h5 class="modal-title">Export Excel</h5>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
        <i class="las la-times"></i>
    </div>
</div>
<div class="modal-body">
    <form id="form_input_modal" action="<?php echo e(route('patient.excel')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-12 mb-5">
                <label for="condition" class="required form-label">Pilih Tanggal</label>
                <div class="input-group">
                    <select data-control="select2" data-placeholder="Pilih Bulan" id="date" name="date"
                        class="form-select form-select-solid <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option SELECTED DISABLED>Pilih Bulan</option>
                        <?php $__currentLoopData = $date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    obj_select('date', 'Pilih Bulan');
</script>
<?php /**PATH D:\laragon\www\klinik\resources\views/pages/medicalRecord/export.blade.php ENDPATH**/ ?>