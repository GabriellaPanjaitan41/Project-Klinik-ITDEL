<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(config('app.name') . ': Masuk'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo e(config('app.name') . ': Masuk'); ?>" />
    <meta property="og:url" content="https://klinikdel.dev" />
    <meta property="og:site_name" content="<?php echo e(config('app.name')); ?>" />
    <link rel="canonical" href="https://klinikdel.dev" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <form class="form w-100" novalidate="novalidate" id="form_login">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Masuk ke <?php echo e(config('app.name')); ?></h1>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" id="email"
                                name="email" autocomplete="off" data-login="1" />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Kata Sandi</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" id="password"
                                name="password" autocomplete="off" data-login="2" />
                        </div>
                        <div class="text-center">
                            <button id="tombol_login"
                                onclick="handle_post('#tombol_login','#form_login','<?php echo e(route('auth.login')); ?>');"
                                data-login="3" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Masuk</span>
                                <span class="indicator-progress">Harap tunggu...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/auth.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\klinik\klinik\resources\views/pages/auth/main.blade.php ENDPATH**/ ?>