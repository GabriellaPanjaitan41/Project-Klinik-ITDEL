<html>

<head>
    <title>Data Obat</title>
</head>

<body>
    <div style="width: 800px">
        <table>
            <thead>
                <tr>
                    <td colspan="6">
                        <h5>LAPORAN PELAYANAN KLINIK DEL</h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <h5>BULAN <?php echo e(\Carbon\Carbon::parse($date)->translatedFormat('F')); ?> TAHUN
                            <?php echo e(\Carbon\Carbon::parse($date)->year); ?></h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <h5>Total <?php echo e($medical_records->count()); ?></h5>
                    </td>
                </tr>
                <tr>
                    <th rowspan="2" style="width: 30px; text-align: center">No</th>
                    <th rowspan="2" style="width: 100px; text-align: center">Tanggal</th>
                    <th rowspan="2" style="width: 200px; text-align: center">Nama Pasien</th>
                    <th rowspan="2" style="width: 100px; text-align: center">Umur</th>
                    <th rowspan="2" style="width: 100px; text-align: center">Jenis Kelamin</th>
                    <th rowspan="2" style="width: 300px; text-align: center">Keluhan</th>
                    <th rowspan="2" style="width: 200px; text-align: center">Diagnosa</th>
                    <th colspan="3" style="width: 200px; text-align: center;">Terapi</th>
                    <th rowspan="2" style="width: 200px; text-align: center;">Keterangan</th>
                    <th rowspan="2" style="width: 200px; text-align: center;">dr Jaga</th>
                </tr>
                <tr>
                    <th style="width: 100px;">Nama Obat</th>
                    <th style="width: 50px;">Jumlah</th>
                    <th style="width: 50px;">Satuan</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $medical_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold; text-align: center;">
                            <?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')); ?>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php $__currentLoopData = $item->medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first): ?>
                            <tr>
                                <td style="text-align: center"><?php echo e($loop->iteration); ?></td>
                                <td style="text-align: center">
                                    <?php echo e(\Carbon\Carbon::parse($item->created_at)->format('H:i')); ?></td>
                                <td style="text-align: center"><?php echo e($item->patient->name); ?></td>
                                <td style="text-align: center">
                                    <?php echo e(\Carbon\Carbon::parse($item->patient->birth_date)->age); ?>

                                    Tahun</td>
                                <td style="text-align: center">
                                    <?php if($item->patient->gender == 'male'): ?>
                                        L
                                    <?php else: ?>
                                        P
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($item->history); ?></td>
                                <td><?php echo e($item->diagnosis); ?></td>

                                <td style="text-align: center">
                                    <?php echo e($medicine->medicine->name); ?>

                                </td>
                                <td style="text-align: center">
                                    <?php echo e($medicine->quantity); ?>

                                </td>
                                <td style="text-align: center">
                                    <?php echo e($medicine->medicine->type); ?>

                                </td>
                                <td><?php echo e($item->patient->status); ?></td>
                                <td><?php echo e($item->medical_personel->name); ?></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: center">
                                    <?php echo e($medicine->medicine->name); ?>

                                </td>
                                <td style="text-align: center">
                                    <?php echo e($medicine->quantity); ?>

                                </td>
                                <td style="text-align: center">
                                    <?php echo e($medicine->medicine->type); ?>

                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH D:\laragon\www\klinik\resources\views/pages/medicalRecord/excel.blade.php ENDPATH**/ ?>