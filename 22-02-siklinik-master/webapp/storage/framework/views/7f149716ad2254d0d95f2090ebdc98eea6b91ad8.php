<html>

<head>
    <title>Data Obat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h5>Laporan Data Obat <?php echo e(\Carbon\Carbon::parse($date)->translatedFormat('F')); ?>

            <?php echo e(\Carbon\Carbon::parse($date)->year); ?></h5>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jumlah Obat Masuk</th>
                <th>Jumlah Obat Keluar</th>
                <th>Jumlah Sisa Stok Obat Bulan Ini</th>
                <th>Jumlah Sisa Stok Obat Bulan Lalu</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->quantity_in); ?></td>
                    <td><?php echo e($item->quantity_out); ?></td>
                    <td><?php echo e($item->quantity_remaining); ?></td>
                    <td><?php echo e(\App\Helpers\Helper::getMedicineRemainingLastMonth($item->id, date('Y-m'))); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH D:\laragon\www\klinik\resources\views/pages/medicine/pdf.blade.php ENDPATH**/ ?>