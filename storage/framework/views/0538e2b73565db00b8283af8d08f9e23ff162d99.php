<?php $__env->startSection('content'); ?>

<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo e(URL::asset('images/logo.png.jpg')); ?>" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="<?php echo e(route('password.request')); ?>">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success login-button btn-flat m-b-30 m-t-30">Sign in</button>
                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> -->
                        <!-- <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.loginapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\idfc\resources\views/auth/login.blade.php ENDPATH**/ ?>