
<?php $__env->startSection('title', 'Data Customer'); ?>
<?php $__env->startSection('css'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('button_header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_header', 'Data Customer'); ?>

<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
   <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
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
        <script
            src="https://code.jquery.com/jquery-3.5.1.js">
        </script>
        <script
            src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
        </script>
        <script
            src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
        </script>
    </head>
        <body>
            <div class="container" style="margin-top: -55px; margin-bottom: 20px; width: 1050px; ">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded-md mt-4">
                            <div class="card-body">
                                <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-post">TAMBAH</a>
                                <table class="table table-bordered table-striped" id="tblContact" >

                                <thead>
                                    <tr>
                                    <th style="min-width: 170px; font-weight:500; padding-left:10px ">Nama Konsumen</th>
                                    <th style="min-width: 120px; font-weight:500;">Gender</th>
                                    <th style="min-width: 180px; font-weight:500;">Alamat</th>
                                    <th style="min-width: 180px; font-weight:500;">Email</th>
                                    <th style="min-width: 100px; font-weight:500;">Password</th>
                                    <th style="font-weight:500;">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody id="table-customers">
                                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="index_<?php echo e($customer->id); ?>">
                                    <td style="padding-left:10px"><?php echo e($customer->nama_customer); ?></td>
                                    <td><?php echo e($customer->jenis_kelamin); ?></td>
                                    <td><?php echo e($customer->alamat); ?></td>
                                    <td><?php echo e($customer->email); ?></td>
                                    <td><?php echo e($customer->password); ?></td>
                                    <td class="text-center"> <a href="javascript:void(0)" id="btn-edit-post" data-id="<?php echo e($customer->id); ?>" class="btn btn-primary btn-sm">EDIT</a>
                                    
                                    </td>
                              </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('customer.modal-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('customer.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <script type="text/javascript">
      $(document).ready(function () {
          $('#tblContact').dataTable({
              "iDisplayLength": 4,
              "lengthMenu": [4,10, 25, 50, 100]
          });
      });
  </script>
<?php $__env->stopSection(); ?>
        </body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectWPF\resources\views/customer/list-customer.blade.php ENDPATH**/ ?>