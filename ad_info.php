<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/auth.php';
exigir_cargo(['admin']);
include 'patterns/header.php';
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm">

                    <div class="card-header text-center py-3" style="background-color:#020101;">
                        <h3 class="mb-0" style="color:#4f96a0;">+ INFO HOME</h3>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <form action="backend/auth/salvar_info.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição do que foi feito</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                                <div class="invalid-feedback">TEXTO.</div>
                            </div>

                            <div class="mb-3">
                                <label for="imagem" class="form-label">Imagem (opcional)</label>
                                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="data_registro" class="form-label">Data</label>
                                <input type="date" class="form-control" id="data_registro" name="data_registro" required>
                                <div class="invalid-feedback">Selecione a data.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Salvar registro</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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

<?php include 'patterns/footer.php'; 
?>