<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Words Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrapp">
                            <h4 class="header-title">
                                <?php echo e(__("Change All Words")); ?>

                            </h4>
                            <div class="header-title">
                                <a class="btn btn-secondary btn-sm margin-bottom-30 mr-1" href="<?php echo e(route('admin.languages')); ?>">  <i class="fa fa-backward" aria-hidden="true"></i> <?php echo e(__('All Languages')); ?></a>
                                <button class="btn btn-info btn-sm margin-bottom-30 add_new_string_btn"  data-toggle="modal" data-target="#add_new_string_modal"> <i class="fas fa-plus mr-1"></i> <?php echo e(__('Add New String')); ?></button>
                            </div>
                        </div>
                        <div class="button-wrap">
                        </div>
                        <form action="<?php echo e(route('admin.languages.words.update',$lang_slug)); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="type" value="<?php echo e($type); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php $__currentLoopData = $all_word; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="<?php echo e(Str::slug(($key))); ?>"><?php echo e($key); ?></label>
                                            <input type="text" name="word[<?php echo e($key); ?>]"  class="form-control" value="<?php echo e($value); ?>" id="<?php echo e(Str::slug(($key))); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_new_string_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Add New Translate String')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="<?php echo e(route('admin.languages.add.string')); ?>" id="add_new_string_modal_form"  method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?php echo e($lang_slug); ?>">
                        <input type="hidden" name="type" value="<?php echo e($type); ?>">
                        <div class="form-group">
                            <label for="string"><?php echo e(__('String')); ?></label>
                            <input type="text" class="form-control" name="string" placeholder="<?php echo e(__('String')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="translate_string"><?php echo e(__('Translated String')); ?></label>
                            <input type="text" class="form-control" name="translate_string" placeholder="<?php echo e(__('Translated String')); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        (function($){
            "use strict";

            $(document).ready(function(){

                $(document).on('click','.add_new_string_btn',function (e){
                   e.preventDefault();

                });
            });

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/languages/edit-words.blade.php ENDPATH**/ ?>