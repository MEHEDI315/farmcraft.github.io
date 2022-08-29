<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    

    <main>
        <!-- Breadcrumb-area-start -->
        <div class="breadcrumb-area pt-10 pb-10">
           <div class="container">
              <div class="row">
                 <div class="col-12">
                    <div class="breadcrumb__list">
                       <span><a href="/">Home</a></span>
                       <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                       <span>Login</span>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Breadcrumb-area-end -->
  
        <!-- Register area start  -->
        <div class="bd-login__area pt-110 pb-130">
           <div class="container small-container">
              <div class="row justify-content-center">
                 <div class="col-xl-8 col-lg-10">
                    <div class="Login-form-wrapper" >
                       <div class="bd-postbox__contact">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                          <form method = "POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                             <div class="row">
                                <div class="col-xxl-12">
                                   <div class="bd-postbox__singel-input">
                                      <input type="email" name="email" placeholder="Email" :value="old('email')" required autofocus>
                                   </div>
                                </div>
                                <div class="col-xxl-12">
                                   <div class="bd-postbox__singel-input">
                                  
                                     <input type="password" name="password" placeholder="******" required autocomplete="current-password">
                                   </div>
                                </div>
                                <div class="signup-action">
                                   <div class="signup-action-check">
                                      <input class="e-check-input" type="checkbox" id="sing-up">
                                      <label class="sign-check" for="sing-up"><span>Remember me</span></label>
                                   </div>
                                </div>
                                <div class="bd-sigin__action-button mb-20">
                                   <button class="bd-fill__btn w-100">Login now</button>
                                </div>
                                <div class="bd-registered__wrapper">
                                   <div class="not-register">
                                      <span>Not registered?</span><span><a href="register.html"> Sign up</a></span>
                                   </div>
                                   <div class="forget-password">
                                      <a href="<?php echo e(route('password.request')); ?>">Forgot password?</a>
                                   </div>
                                </div>
                                <div class="bd-resister__bottom-text text-center">
                                   <div class="bd-sign__social-text">
                                      <span>Or Sign- in with</span>
                                   </div>
                                   <div class="bd-sign__social-icon">
                                      <a href="https://www.facebook.com/">
                                         <i class="fa-brands fa-facebook-f"></i>
                                         <span>Facebook</span>
                                      </a>
                                      <a href="https://www.gmail.com/">
                                         <i class="fa-solid fa-envelope-open"></i>
                                         <span>Google</span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Register area end  -->
     </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wworganic\resources\views/auth/login.blade.php ENDPATH**/ ?>