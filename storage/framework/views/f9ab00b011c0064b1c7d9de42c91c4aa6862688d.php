<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-navbar-theme container-p-x" id="layout-navbar">

    <!-- Brand -->
    <a href="<?php echo e(route('home')); ?>" class="navbar-brand">Crypto Currency Portfolio</a>

    <?php if(empty($hide_layout_sidenav_toggle)): ?>
    <!-- Sidenav toggle -->
    <div class="layout-sidenav-toggle navbar-nav align-items-lg-center mr-auto mr-lg-4">
        <a class="nav-item nav-link px-0 ml-2" href="javascript:void(0)">
            <i class="ion ion-md-menu text-large align-middle"></i>
        </a>
    </div>
    <?php endif; ?>

    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto navbar-right">
    <!-- Authentication Links -->
    <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
        </li>
    <?php else: ?>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    <?php endif; ?>
</ul>

</nav>
