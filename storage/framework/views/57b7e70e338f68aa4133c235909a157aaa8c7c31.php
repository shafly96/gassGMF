<?php $__env->startSection('judul1'); ?>
After Sales & Parts Service
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata" style="padding-top: 50px">
  <div class="box">
    <div class="box-header with-border">
    <p class="judul-berita">GASS Product Warranty Claims</p>
    </div>
    <div class="box-body">
        <form action="<?php echo e(url('/')); ?>/aftersales" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="exampleInputPassword1">Company Name</label>
                      <input type="text" class="form-control" name="company" placeholder="Insert company name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contact Name</label>
                      <input type="text" class="form-control" name="contact" placeholder="Insert contact name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Insert Email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Machine Serial Number</label>
                      <input type="text" class="form-control" name="serial" placeholder="Insert Machine Serial Number" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Machine out of service</label> <br>
                      <input type="radio"  name="out" value="1" required> Yes
                      <input type="radio" name="out" value="0" required> No

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Product Type</label>
                      <select class="form-control" name="tipe">
                          <option value="1">Assembly and Fabrication</option>
                          <option value="2">Service</option>
                          <option value="3">Maintenance</option>
                          <option value="4">Rental</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description of issue</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the general information about the product"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>
                      <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Insert issue description"></textarea>
                    </div>
                    <div class="form-group">
                          <label for="media">Upload photo(s):</label>
                          <input type="file" class="form-control" name="media[]" id="media" multiple>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary" id="simpan">Save</button>

                    </div>
        </form>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>