<?php include 'patterns/header.php'; ?>
    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                <form action="backend/auth/salvar_feedback.php" method="post">
                <h1 class="h3">JARVIS: O Braço Robótico Modular</h1>
                <h4 class="text-body-secondary fw-normal mb-4">Deixe seu feedback sobre o protótipo</h4>

                        <!-- P1: impressão geral -->
                        <div class="mb-3">
                           <label for="impressao" class="form-label">Qual sua impressão geral sobre o JARVIS?</label>
                           <select class="form-select" id="impressao" name="impressao" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="excelente">Excelente</option>
                                 <option value="bom">Bom</option>
                                 <option value="regular">Regular</option>
                                 <option value="ruim">Precisa melhorar</option>
                            </select>
                            </div>

                        <!-- P2: recurso que mais chamou atenção -->
                        <div class="mb-3">
                           <label for="recurso_destaque" class="form-label">Qual recurso mais chamou sua atenção?</label>
                           <select class="form-select" id="recurso_destaque" name="recurso_destaque" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="troca_garra">Troca rápida de garra</option>
                                 <option value="modularidade">Sistema modular</option>
                                 <option value="movimentos">Precisão dos movimentos</option>
                                 <option value="design">Design e estrutura</option>
                                 <option value="controladora">Controladora programável</option>
                            </select>
                            </div>

                            <!-- P3: clareza da demonstração -->
                            <div class="mb-3">
                           <label for="clareza" class="form-label">A demonstração do funcionamento foi clara?</label>
                           <select class="form-select" id="clareza" name="clareza" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="muito_clara">Muito clara</option>
                                 <option value="clara">Clara</option>
                                 <option value="confusa">Um pouco confusa</option>
                                 <option value="nao_entendi">Não entendi bem</option>
                            </select>
                            </div>

                            <!-- P4: recurso futuro de maior interesse -->
                            <div class="mb-3">
                           <label for="futuro" class="form-label">Qual funcionalidade futura mais te interessa?</label>
                           <select class="form-select" id="futuro" name="futuro" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="ia">Inteligência Artificial própria</option>
                                 <option value="comando_voz">Comando por voz</option>
                                 <option value="sensores">Sensores de ambiente</option>
                                 <option value="visao">Visão computacional</option>
                                 <option value="iot">Conectividade IoT</option>
                            </select>
                            </div>

                            <!-- P5: recomendaria o projeto -->
                            <div class="mb-3">
                           <label for="recomendaria" class="form-label">Você recomendaria o JARVIS para outras feiras de tecnologia?</label>
                           <select class="form-select" id="recomendaria" name="recomendaria" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="sim">Sim, com certeza</option>
                                 <option value="talvez">Talvez</option>
                                 <option value="nao">Não</option>
                            </select>
                            </div>

                            <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Deixe seu comentário aqui" id="comentario" name="comentario" style="height: 100px"></textarea>
                            <label for="comentario">Comentários (opcional)</label>
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">Enviar feedback</button>

                <!-- Limpar float no final -->
                <div style="clear: both;"></div>
                </form>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php include 'patterns/footer.php'; ?>