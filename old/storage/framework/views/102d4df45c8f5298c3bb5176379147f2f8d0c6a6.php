<?php $__env->startSection('content'); ?>

    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>jsPharmacy</b>BD</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">
                    <?php echo e(__('Register a new membership')); ?>

                </p>

                <form autocomplete="off" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="<?php echo e(__('Full name')); ?>" name="name" value="<?php echo e(old('name')); ?>"
                               autocomplete="name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        <?php $__errorArgs = ['name'];
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


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       placeholder="<?php echo e(__('Date of Birth')); ?>" name="dob" value="<?php echo e(old('dob')); ?>"
                                       >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-calendar"></span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['dob'];
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
                                <input type="text" class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       placeholder="<?php echo e(__('Mobile')); ?>" name="mobile" value="<?php echo e(old('mobile')); ?>"
                                       >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['mobile'];
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


                    <fieldset>
                        <legend class="w-auto"><p class="text-sm m-0 text-primary">Permanent Address</p></legend>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text"
                                           class="form-control <?php $__errorArgs = ['perm_add_house'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="<?php echo e(__('House')); ?>" name="perm_add_house"
                                           id="perm_add_house"
                                           value="<?php echo e(old('perm_add_house')); ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-home"></span>
                                        </div>
                                    </div>

                                    <?php $__errorArgs = ['perm_add_house'];
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
                                    <input type="text" class="form-control <?php $__errorArgs = ['perm_add_road'];
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

                                    <?php $__errorArgs = ['perm_add_road'];
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
                                    <input type="text" class="form-control <?php $__errorArgs = ['perm_add_ward'];
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
                                    <input type="text" class="form-control <?php $__errorArgs = ['perm_add_para'];
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

                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control <?php $__errorArgs = ['perm_add_district_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   placeholder="<?php echo e(__('District / City')); ?>" name="perm_add_district_city"
                                   id="perm_add_district_city"
                                   value="<?php echo e(old('perm_add_district_city')); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-city"></span>
                                </div>
                            </div>
                            <?php $__errorArgs = ['perm_add_district_city'];
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

                    </fieldset>


                    <fieldset class="position-relative" >
                        <legend class="w-auto">
                            <span class="text-sm m-0 text-primary">Present Address</span>
                        </legend>

                        <legend class="position-absolute mt-n5 pt-3">
                            <div class="float-right text-sm text-info">
                                <input id="sameAddress" checked type='checkbox' data-toggle='collapse'
                                       data-target='#presentAddressGroup'>
                                Same As Permanent ?
                                </input>

                            </div>
                        </legend>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text"
                                               class="form-control <?php $__errorArgs = ['pres_add_house'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="<?php echo e(__('House')); ?>" name="pres_add_house" id="pres_add_house"
                                               value="<?php echo e(old('pres_add_house')); ?>" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-home"></span>
                                            </div>
                                        </div>

                                        <?php $__errorArgs = ['pres_add_house'];
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
                                               class="form-control <?php $__errorArgs = ['pres_add_road'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="<?php echo e(__('Road')); ?>" name="pres_add_road" id="pres_add_road"
                                               value="<?php echo e(old('pres_add_road')); ?>" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-road"></span>
                                            </div>
                                        </div>

                                        <?php $__errorArgs = ['pres_add_road'];
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
                                        <input type="text"
                                               class="form-control <?php $__errorArgs = ['pres_add_ward'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="<?php echo e(__('Ward')); ?>" name="pres_add_ward" id="pres_add_ward"
                                               value="<?php echo e(old('pres_add_ward')); ?>" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-address-book"></span>
                                            </div>
                                        </div>

                                        <?php $__errorArgs = ['pres_add_ward'];
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
                                               class="form-control <?php $__errorArgs = ['pres_add_para'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="<?php echo e(__('Para')); ?>" name="pres_add_para" id="pres_add_para"
                                               value="<?php echo e(old('pres_add_para')); ?>" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-dot-circle"></span>
                                            </div>
                                        </div>

                                        <?php $__errorArgs = ['pres_add_para'];
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

                            <div class="input-group mb-3">
                                <input type="text"
                                       class="form-control <?php $__errorArgs = ['pres_add_district_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       placeholder="<?php echo e(__('District / City')); ?>" name="pres_add_district_city" id="pres_add_district_city"
                                       value="<?php echo e(old('pres_add_district_city')); ?>" >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-city"></span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['pres_add_district_city'];
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


                    </fieldset>


                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="<?php echo e(__('Email')); ?>" name="email" value="<?php echo e(old('email')); ?>"
                               autocomplete="emial">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <?php $__errorArgs = ['email'];
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               name="password"  autocomplete="new-password" placeholder="<?php echo e(__('Password')); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <?php $__errorArgs = ['password'];
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                               placeholder="<?php echo e(__('Retype Password')); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Register')); ?></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                  </a>
                </div> -->

                <a class="nav-link " href="<?php echo e(route('login')); ?>"><?php echo e(__('I already have a membership')); ?></a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master',['page'=>'register-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/auth/register.blade.php ENDPATH**/ ?>