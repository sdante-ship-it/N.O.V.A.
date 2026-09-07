<?php include 'patterns/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm">

                    <div class="card-header text-center py-3" style="background-color:#020101;">
                        <h3 class="mb-0" style="color:#4f96a0;">DIÁRIO DE BORDO</h3>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <form action="salvar_diario.php" method="post" class="needs-validation" novalidate>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nome de login</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">
                                    Digite seu nome de login.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição do que foi feito</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Descreva o que foi feito.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="data_registro" class="form-label">Data</label>
                                <input type="date" class="form-control" id="data_registro" name="data_registro" required>
                                <div class="invalid-feedback">
                                    Selecione a data.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Salvar registro</button>

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