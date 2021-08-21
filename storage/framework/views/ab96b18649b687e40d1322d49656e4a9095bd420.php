<!-- Start datatable js -->
<script src="<?php echo e(asset('assets/backend/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/responsive.bootstrap.min.js')); ?>"></script>
<script>
    (function($){
    "use strict";
    $('.table-wrap > table').DataTable( {
        "order": [[ 1, "desc" ]],
        'columnDefs' : [{
            'targets' : 'no-sort',
            'orderable' : false
        }]
    } );
            
    })(jQuery);
</script><?php /**PATH C:\Users\SANAUL\Desktop\code canyan\cleaning\@core\resources\views/backend/partials/datatable/script-enqueue.blade.php ENDPATH**/ ?>