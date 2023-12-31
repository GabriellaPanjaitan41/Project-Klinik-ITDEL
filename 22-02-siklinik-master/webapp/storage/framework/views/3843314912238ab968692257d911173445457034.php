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
                        Data Rekam Medis
                    </h6>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="back();" class="btn btn-sm btn-primary">Kembali</button>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <form id="form_input" class="form">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Nama Pasien</label>
                            <input type="text" class="form-control" value="<?php echo e($patient->name); ?>" readonly>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="form-label">No Rekam Medis Pasien</label>
                            <input type="number" class="form-control" value="<?php echo e($patient->id); ?>" readonly>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Nama Tenaga Medis</label>
                            <div class="input-group">
                                <select data-control="select2" data-placeholder="Pilih Tenaga Medis"
                                    id="medical_personel_id" name="medical_personel_id" class="form-select">
                                    <option SELECTED DISABLED>Pilih Tenaga Medis</option>
                                    <?php $__currentLoopData = $medical_personels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                            <?php echo e($item->id == $data->medical_personel_id ? 'selected' : ''); ?>>
                                            <?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Anamnesa</label>
                            <input type="text" class="form-control" id="history" name="history"
                                placeholder="Masukkan Anamnesa..." value="<?php echo e($data->history); ?>">
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Tinggi Badan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" onkeyup="sum('#height', '#weight');"
                                    id="height" name="height" placeholder="Masukkan Tinggi Badan..."
                                    value="<?php echo e($physical_examination->height); ?>">
                                <button class="btn btn-light" disabled>
                                    cm
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Berat Badan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" onkeyup="sum('#height', '#weight');"
                                    id="weight" name="weight" placeholder="Masukkan Berat Badan..."
                                    value="<?php echo e($physical_examination->weight); ?>">
                                <button class="btn btn-light" disabled>
                                    kg
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Lingkar Perut</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="belly_circumference"
                                    name="belly_circumference" placeholder="Masukkan Lingkar Perut..."
                                    value="<?php echo e($physical_examination->belly_circumference); ?>">
                                <button class="btn btn-light" disabled>
                                    cm
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">IMT</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="bmi" name="bmi"
                                    value="<?php echo e($physical_examination->bmi); ?>" readonly>
                                <button class="btn btn-light" disabled>
                                    kg/m2
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Sistole</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="sistole" name="sistole"
                                    placeholder="Masukkan Sistole..." value="<?php echo e($physical_examination->sistole); ?>">
                                <button class="btn btn-light" disabled>
                                    mmhg
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Diastole</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="diastole" name="diastole"
                                    placeholder="Masukkan Diastole..." value="<?php echo e($physical_examination->diastole); ?>">
                                <button class="btn btn-light" disabled>
                                    mmhg
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Respiratory Rate</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="respiratory_rate"
                                    name="respiratory_rate" placeholder="Masukkan Respiratory Rate..."
                                    value="<?php echo e($physical_examination->respiratory_rate); ?>">
                                <button class="btn btn-light" disabled>
                                    / minute
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <label for="condition" class="required form-label">Heart Rate</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="heart_rate" name="heart_rate"
                                    placeholder="Masukkan Heart Rate..."
                                    value="<?php echo e($physical_examination->heart_rate); ?>">
                                <button class="btn btn-light" disabled>
                                    / bpm
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Kasus Kecelakaan</label>
                            <div class="input-group">
                                <select data-placeholder="Pilih Tenaga Medis" id="status" name="status"
                                    class="form-select">
                                    <option value="Tidak"
                                        <?php echo e($physical_examination->status == 'Tidak' ? 'checked' : ''); ?>>
                                        Tidak</option>
                                    <option value="Ya" <?php echo e($physical_examination->status == 'Ya' ? 'checked' : ''); ?>>
                                        Ya
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Pemeriksaan Fisik</label>
                            <div class="input-group">
                                <textarea class="form-control" id="physical_examination" name="physical_examination" data-kt-autosize="true"
                                    placeholder="Masukkan Pemeriksaan Fisik..."><?php echo e($data->physical_examination); ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Penatalaksaaan Dan Edukasi</label>
                            <div class="input-group">
                                <textarea class="form-control" id="treatment" name="treatment" data-kt-autosize="true"
                                    placeholder="Masukkan Pemeriksaan Fisik..."><?php echo e($data->treatment); ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Diagnosa</label>
                            <input type="text" class="form-control" id="diagnosis" name="diagnosis"
                                placeholder="Masukkan Diagnosa..." value="<?php echo e($data->diagnosis); ?>">
                        </div>
                        <!--begin::Repeater-->
                        <div id="kt_docs_repeater_advanced">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="kt_docs_repeater_advanced">
                                    <?php if($data->id): ?>
                                        <?php $__currentLoopData = $data->medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div data-repeater-item>
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-3 mb-5">
                                                        <label for="condition" class="required form-label">Nama
                                                            Obat</label>
                                                        <div class="input-group">
                                                            <select data-kt-repeater="select2"
                                                                data-placeholder="Pilih Obat" id="medicine_id"
                                                                name="medicine_id" class="form-select">
                                                                <option SELECTED DISABLED>Pilih Obat</option>
                                                                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item->id); ?>"
                                                                        <?php echo e($item->id == $details->medicine_id ? 'selected' : ''); ?>>
                                                                        <?php echo e($item->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-5">
                                                        <label for="condition" class="required form-label">Jumlah
                                                            Obat</label>
                                                        <input type="number" class="form-control" id="qty" name="qty"
                                                            placeholder="Masukkan Jumlah Obat yang Digunakan..."
                                                            value="<?php echo e($details->quantity); ?>">
                                                    </div>
                                                    <div class="col-md-3 mb-5">
                                                        <label for="condition" class="required form-label">Prosedur
                                                            Penggunaan</label>
                                                        <input type="text" class="form-control" id="procedure"
                                                            name="procedure"
                                                            placeholder="Masukkan Prosedur Penggunaan..."
                                                            value="<?php echo e($details->procedure); ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                            <i class="la la-trash-o fs-3"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div data-repeater-item>
                                            <div class="form-group row mb-5">
                                                <div class="col-md-3 mb-5">
                                                    <label for="condition" class="required form-label">Nama
                                                        Obat</label>
                                                    <div class="input-group">
                                                        <select data-kt-repeater="select2" data-placeholder="Pilih Obat"
                                                            id="medicine_id" name="medicine_id" class="form-select">
                                                            <option SELECTED DISABLED>Pilih Obat</option>
                                                            <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item->id); ?>">
                                                                    <?php echo e($item->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-5">
                                                    <label for="condition" class="required form-label">Jumlah
                                                        Obat</label>
                                                    <input type="number" class="form-control" id="qty" name="qty"
                                                        placeholder="Masukkan Jumlah Obat yang Digunakan...">
                                                </div>
                                                <div class="col-md-3 mb-5">
                                                    <label for="condition" class="required form-label">Prosedur
                                                        Penggunaan</label>
                                                    <input type="text" class="form-control" id="procedure"
                                                        name="procedure" placeholder="Masukkan Prosedur Penggunaan...">
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-delete
                                                        class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                        <i class="la la-trash-o fs-3"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="la la-plus"></i>Add
                                </a>
                            </div>
                            <!--end::Form group-->
                        </div>

                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            <?php if($data->id): ?>
                                <button id="tombol_simpan"
                                    onclick="handle_save('#tombol_simpan','#form_input','<?php echo e(route('patient.medical_record.update', [$patient->id, $data->id])); ?>','PATCH');"
                                    class="btn btn-sm btn-primary">Simpan</button>
                            <?php else: ?>
                                <button id="tombol_simpan"
                                    onclick="handle_save('#tombol_simpan','#form_input','<?php echo e(route('patient.medical_record.store', $patient->id)); ?>','POST');"
                                    class="btn btn-sm btn-primary">Simpan</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    obj_select('patient_id', 'Pilih Pasien');
    obj_select('medical_personel_id', 'Pilih Tenaga Medis');

    function sum(height, weight) {
        var sum = 0;
        var height = $(height).val() / 100;
        var weight = $(weight).val();
        sum = weight / ((height * height));
        if (isFinite(sum)) {
            $("#bmi").val(sum);
        } else {
            $("#bmi").val('');
        }
    }
    $('#kt_docs_repeater_advanced').repeater({
        initEmpty: false,

        show: function() {
            $(this).slideDown();

            // Re-init select2
            $(this).find('[data-kt-repeater="select2"]').select2();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        },

        ready: function() {
            // Init select2
            $('[data-kt-repeater="select2"]').select2();
        },
    });
</script>
<?php /**PATH D:\laragon\www\klinik\resources\views/pages/medicalRecord/input.blade.php ENDPATH**/ ?>