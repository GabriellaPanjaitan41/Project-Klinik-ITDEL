<?php $__env->startSection('title', 'Pasien'); ?>
<?php $__env->startSection('content'); ?>
    <div id="content_list">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <form id="content_filter">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1 me-3">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <input type="text" name="keyword" class="form-control form-control-solid w-250px ps-15"
                                        placeholder="Cari nama pasien..." />
                                </div>
                                <div class="d-flex justify-content-end me-3">
                                    <select class="form-select form-select-solid" name="gender">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end me-3">
                                    <select class="form-select form-select-solid" name="status">
                                        <option value="">Semua Status</option>
                                        <option value="Siswa DEL">Siswa DEL</option>
                                        <option value="Mahasiswa DEL">Mahasiswa DEL</option>
                                        <option value="Karyawan DEL">Karyawan DEL</option>
                                        <option value="BPJS Umum">BPJS Umum</option>
                                        <option value="Umum">Umum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:;"
                                        onclick="handle_open_modal('<?php echo e(route('patient.export')); ?>','#modalListResult','#contentListResult');"
                                        class="btn btn-sm btn-primary me-3">Excel</a>
                                    <button type="button" onclick="load_input('<?php echo e(route('patient.create')); ?>');"
                                        class="btn btn-sm btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="datatables">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">Nama Pasien</th>
                                        <th class="min-w-125px">Umur</th>
                                        <th class="min-w-125px">Alamat</th>
                                        <th class="min-w-125px">Jenis Kelamin</th>
                                        <th class="min-w-125px">Status</th>
                                        <th class="text-end min-w-70px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    <div id="content_detail"></div>
<?php $__env->startSection('custom_js'); ?>
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                serverSide: true,
                ajax: '<?php echo e(route('patient.index')); ?>',
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'age',
                        name: 'age'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                caseInsensitive: true,
                order: [
                    [0, 'asc']
                ],
                responsive: true,
                language: {
                    zeroRecords: "Tidak ada data",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
                    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                }
            });

            $('input[name="keyword"]').on('keyup', function() {
                $('#datatables').DataTable().search($(this).val()).draw();
            });

            $('select[name="gender"]').on('change', function() {
                $('#datatables').DataTable().columns(3).search($(this).val()).draw();
            })

            $('select[name="status"]').on('change', function() {
                if ($(this).val() == '') {
                    $('#datatables').DataTable().columns(4).search($(this).val()).draw();
                } else {
                    $('#datatables').DataTable().columns(4).search('^' + $(this).val() + '$', true, false,
                        true).draw();
                }
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik\klinik\resources\views/pages/patient/main.blade.php ENDPATH**/ ?>