<?php include 'header.php';?>



<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">
            <div class="card bg-light shadow my-5">
                <img src="https://i.pinimg.com/736x/a1/f0/d0/a1f0d073dfa1acc66b9cede8f264cdaf.jpg" class="card-img-top">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nome" class="label-control">Nome Completo :</label>
                            <input type="text" name="nome" id="nome"class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="label-control">Email :</label>
                            <input type="email" name="email" id="email"class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="label-control">Senha : </label>
                            <input type="password" name="senha" id="senha"class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_senha" class="label-control"> Confirmar Senha : </label>
                            <input type="password" name="confirmar_senha" id="confirmar_senha"class="form-control">
                        </div>

                        <div class="mb-3">
                            <p>Já possui Conta? <a href="login.php">Clique aqui!</a></p>
                        </div>

                        <button type="submit" class="btn btn-dark">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>









<?php include 'footer.php';?>