<!-- Sign Up Start -->
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <?php getFlashdata()?>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TheLastDance</h3>
                            </a>
                            <h3>Cadastrar</h3>
                        </div>
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <div class="form-floating mb-3">
                            <input name="nome" type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Cadastrar</button>
                        <p class="text-center mb-0">Voce tem uma conta <a href="<?=BASE_URL?>/login">Logar-se</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->