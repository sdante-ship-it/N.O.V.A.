<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/backend/auth/auth.php';
exigir_cargo(['admin', 'colaborador']);
include 'patterns/header.php';
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm">

                    <div class="card-header text-center py-3" style="background-color:#020101;">
                        <h3 class="mb-0" style="color:#4f96a0;">DIÁRIO DE BORDO</h3>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <form action="backend/auth/salvar_diario.php" method="post" class="needs-validation" novalidate>

                           <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="conteudo" class="form-label">O que foi feito</label>
                                <textarea class="form-control" id="conteudo" name="conteudo" rows="3" required></textarea>
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

<?php include 'patterns/footer.php'; ?>