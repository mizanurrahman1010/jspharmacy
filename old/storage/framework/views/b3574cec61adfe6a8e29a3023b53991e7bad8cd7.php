<div class="modal fade" id="posModal" aria-hidden="true" style="z-index: 16000">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" method="POST" id="orderForm" name="orderForm" class="form-horizontal">
                    <input type="hidden" id="deliveryAddress" name="deliveryAddress" value="present">

                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            if($customer!=null){
                            ?>

                            <ul id="tabsJustified" class="nav nav-tabs nav-fill">
                                <li class="nav-item">
                                    <a href="" data-target="#presentAddress" data-toggle="tab" data-address="present"
                                        class="nav-link small text-uppercase deliveryAddress active">
                                        Present Address
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#permanentAddress" data-toggle="tab"
                                        data-address="permanent"
                                        class="nav-link small text-uppercase deliveryAddress ">Permanent
                                        Address</a></li>
                            </ul>
                            <br>
                            <?php
                            }
                            ?>

                            <div id="tabsJustifiedContent" class="tab-content">
                                <div id="presentAddress" class="tab-pane fade active show">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('House')); ?>"
                                                    name="pres_add_house"
                                                    value="<?php echo e(($customer!=null)?$customer->pres_add_house:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-home"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('Road')); ?>"
                                                    name="pres_add_road"
                                                    value="<?php echo e(($customer!=null)?$customer->pres_add_road:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-road"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('Ward')); ?>"
                                                    name="pres_add_ward" id="pres_add_ward"
                                                    value="<?php echo e(($customer!=null)?$customer->pres_add_ward:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-address-book"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('Para')); ?>"
                                                    name="pres_add_para"
                                                    value="<?php echo e(($customer!=null)?$customer->pres_add_para:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-dot-circle"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control "
                                                    placeholder="<?php echo e(__('District / City')); ?>"
                                                    name="pres_add_district_city"
                                                    value="<?php echo e(($customer!=null)?$customer->pres_add_district_city:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-city"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('Mobile')); ?>"
                                                    name="mobile" value="<?php echo e(($customer!=null)?$customer->mobile:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-phone"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div id="permanentAddress" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="<?php echo e(__('House')); ?>"
                                                    name="perm_add_house" id="perm_add_house"
                                                    value="<?php echo e(old('perm_add_house')); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-home"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="input-group mb-3">
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['perm_add_road'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('Road')); ?>" name="perm_add_road" id="perm_add_road"
                                                    value="<?php echo e(old('perm_add_road')); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-road"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="input-group mb-3">
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['perm_add_ward'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('Ward')); ?>" name="perm_add_ward" id="perm_add_ward"
                                                    value="<?php echo e(old('perm_add_ward')); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-address-book"></span>
                                                    </div>
                                                </div>

                                                <?php $__errorArgs = ['perm_add_ward'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['perm_add_para'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('Para')); ?>" name="perm_add_para" id="perm_add_para"
                                                    value="<?php echo e(old('perm_add_para')); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-dot-circle"></span>
                                                    </div>
                                                </div>

                                                <?php $__errorArgs = ['perm_add_para'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control "
                                                    placeholder="<?php echo e(__('District / City')); ?>"
                                                    name="perm_add_district_city"
                                                    value="<?php echo e(($customer!=null)?$customer->perm_add_district_city:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-city"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control " placeholder="<?php echo e(__('Mobile')); ?>"
                                                    name="mobile" value="<?php echo e(($customer!=null)?$customer->mobile:""); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-phone"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="note" class="col-sm-12 control-label">Note</label>
                                <div class="col-sm-12">
                                    <textarea id="note" name="note" placeholder="Enter Special Notes"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary float-right" id="saveBtn" value="create">
                            Place order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/pos/components/modal.blade.php ENDPATH**/ ?>