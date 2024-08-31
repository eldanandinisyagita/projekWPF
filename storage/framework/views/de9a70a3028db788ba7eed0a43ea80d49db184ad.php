

<?php $__env->startSection('title', 'Data User'); ?>
<?php $__env->startSection('css'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('button_header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_header', 'Data User'); ?>

<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Laravel Ajax CRUD</title>
        
        <style>
            body {
                background-color: lightgray !important;
            }
        </style>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        </script> 
        <script
            src="//cdn.jsdelivr.net/npm/sweetalert2@11">
        </script>
    </head>
        <body>
            <div class="container" style="margin-top: -360px;">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card border-0 shadow-sm rounded-md mt-4">

                            <div class="card-body">

                                <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-post">TAMBAH</a>

                                <table class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                    <th style=" font-weight:500;padding-left:10px">Nama User</th>
                                    <th style="font-weight:500;">Jenis Kelamin</th>
                                    <th style="font-weight:500;">Alamat</th>
                                    <th style="font-weight:500;">Username</th>
                                    <th style="font-weight:500;">Password</th>
                                    <th style="font-weight:500;">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody id="table-users">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="index_<?php echo e($user->id); ?>">
                                    <td style="padding-left: 10px;;"><?php echo e($user->nama_user); ?></td>
                                    <td><?php echo e($user->jenis_kelamin); ?></td>
                                    <td><?php echo e($user->alamat); ?></td>
                                    <td><?php echo e($user->username); ?></td>
                                    <td><?php echo e($user->password); ?></td>
                                    <td class="text-center"> <a href="javascript:void(0)" id="btn-edit-post" data-id="<?php echo e($user->id); ?>" class="btn btn-primary btn-sm">EDIT</a>
                                    
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('user.modal-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('user.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <script>
        $('#kt_datatable_example_5').DataTable({
            "language":{
                "lengthMenu": "Show MENU",
            },
            "dom":
            "<'row'"+
            "<'col-sm-6 d-flex align-items-center justify-content-start'l"> +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>"+
            ">" +

            "<'table-responsive'tr>"+

            "<'row'"+
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>"+
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>"+
            ">"
        });
    </script>
<?php $__env->stopSection(); ?>
        </body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectWPF\resources\views/user/list-user.blade.php ENDPATH**/ ?>