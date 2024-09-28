<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">

        <div class="card o-hidden border-0 shadow-lg my-5" style=" background-color: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>      
                            <form class="user" action="/" method="post">
                            <?= $validate->listErrors()?>
                                <div class="form-group">
                                <input name="nama" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                     
                                    <div class="col-sm-6">
                                         <select name="level" id="" class="form-control form-control-user" placeholder="Level">
                                        <option value="user">User</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light btn-user btn-block">
                                    Register
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small text-white" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>