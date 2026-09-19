<?php include 'patterns/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm">

                    <div class="card-header text-center py-3" style="background-color:#020101;">
                        <h3 class="mb-0" style="color:#4f96a0;">CADASTRO</h3>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <form action="backend/auth/salvar_cadastro.php" method="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                                </div>
                            <div class="mb-4">
                                <label class="form-label d-block">Tipo de acesso</label>
                                <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="type" id="leitor" value="leitor" checked>
                                <label class="btn btn-outline-primary" for="leitor">Usuário</label>
                                <input type="radio" class="btn-check" name="type" id="colaborador" value="colaborador">
                                <label class="btn btn-outline-primary" for="colaborador">Colaborador</label>
                                <input type="radio" class="btn-check" name="type" id="admin" value="admin">
                                <label class="btn btn-outline-primary" for="admin">ADM</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const senha = document.getElementById('senha');
                const confirmar = document.getElementById('confirmar_senha');
                    if (senha.value !== confirmar.value) {
                        confirmar.setCustomValidity('As senhas não coincidem');
                        } else {
                        confirmar.setCustomValidity('');
                                }
                            })
   </script>
<?php include 'patterns/footer.php'; ?>