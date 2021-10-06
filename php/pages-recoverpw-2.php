<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('public/assets/images/bg-2.jpg');background-size: cover;"></div>
        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="public/assets/images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Reset Password</h4>
                        <p class="text-muted text-center">Enter your Email and instructions will be sent to you!</p>

                        <form class="form-horizontal m-t-30" action="index.php">

                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="">Remember It ? <a href="pages-login-2.php" class="font-500 font-14 font-secondary"> Sign In Here </a> </p>
                <p class="">© <?php echo date("Y",strtotime("-1 year")); ?> - <?php echo date("Y"); ?>  Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>

        <?php include 'layouts/footerScript.php'; ?>
       
        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>