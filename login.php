<?php include 'patterns/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm">

                    <div class="card-header text-center py-3" style="background-color:#020101;">
                        <h3 class="mb-0" style="color:#4f96a0;">LOGIN</h3>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <form action="backend/auth/auth_login.php" method="post" class="needs-validation" novalidate>

                           
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                <div class="invalid-feedback">
                                    Digite um email válido.
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" minlength="6" required>
                                <div class="invalid-feedback">
                                    A senha precisa ter pelo menos 6 caracteres.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Entrar</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ativa o estilo de validação visual do Bootstrap (bordas vermelhas/verdes)
        // sem essa parte, o "required" funciona mas sem o visual customizado
        (() => {
            document.querySelectorAll('.needs-validation').forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        })();
    </script>

<?php include 'patterns/footer.php'; ?>