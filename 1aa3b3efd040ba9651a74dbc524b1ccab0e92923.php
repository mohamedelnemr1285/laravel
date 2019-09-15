<?php $__env->startSection('contant'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 center">


                <form action="/borrow/<?php echo e($students); ?>" method="POST" role="form" >

                <?php echo e(method_field('PATCH')); ?>

                <?php echo e(csrf_field()); ?>

                    <legend>Borrow A book</legend>

                    <div class="form-group">
                        <label for="Name of Students">Name of Students</label>

                        <select name="username">
                            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($student->id); ?>"><?php echo e(ucwords( $student->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                    </div>


                    <div class="form-group">
                        <label for="Borrow Or Not">Borrow Or Not</label>
                        <select name="borrow">
                            <option>Borrow</option>
                            <option>Not Borrow</option>
                        </select>
                        
                        

                    </div>

                    <div class="form-group">
                        <label for="Count Of Dayes Borrow A Book">Count Of Dayes Borrow A Book</label>
                        <select name="dayes">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('library.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/library/Borrowed.blade.php ENDPATH**/ ?>