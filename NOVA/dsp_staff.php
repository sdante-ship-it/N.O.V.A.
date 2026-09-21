<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/backend/auth/auth.php';
exigir_cargo(['admin', 'colaborador']);
include 'patterns/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">Painel — Bem-vindo(a), <?= htmlspecialchars($_SESSION['usuario_nome']) ?></h1>

            <div class="row g-3">

                <div class="col-md-4">
                    <a href="<?= BASE_URL ?>#javiscontroler" class="text-decoration-none">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Software J.A.R.V.I.S</h5>
                                <p class="card-text small">Acessar Controlador</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= BASE_URL ?>dsp_diario.php" class="text-decoration-none">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Diário de Bordo</h5>
                                <p class="card-text small">Ver e adicionar registros</p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php if ($_SESSION['usuario_cargo'] === 'admin'): ?>
                    <div class="col-md-4">
                        <a href="<?= BASE_URL ?>ad_info.php" class="text-decoration-none">
                            <div class="card shadow-sm h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">+ Info Home</h5>
                                    <p class="card-text small">Publicar atualização</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100" style="opacity:0.5;">
                            <div class="card-body text-center">
                                <h5 class="card-title">+ Info Home</h5>
                                <p class="card-text small">Disponível apenas para administradores</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<div id="dashboard" class="row justify-content-center mt-5">
    <div class="col-lg-10" style="background-color:#757575; border-radius: 15px; padding: 25px;">
        <h2 class="mb-4" style="color:white;">Dashboard</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div id="chart_sankey" style="background:white; border-radius:10px; padding:10px; min-height:300px;"></div>
            </div>
            <div class="col-md-6">
                <div id="chart_treemap" style="background:white; border-radius:10px; padding:10px; min-height:300px;"></div>
            </div>
            <div class="col-md-6">
                <div id="chart_gauge" style="background:white; border-radius:10px; padding:10px; min-height:300px;"></div>
            </div>
            <div class="col-md-6">
                <div id="chart_calendar" style="background:white; border-radius:10px; padding:10px; min-height:300px;"></div>
            </div>
            <div class="col-12">
                <div id="chart_table" style="background:white; border-radius:10px; padding:10px;"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
const BASE_URL = "<?= BASE_URL ?>";

google.charts.load('current', { packages: ['sankey', 'treemap', 'gauge', 'calendar', 'table'] });
google.charts.setOnLoadCallback(carregarDashboard);

const LABELS_IMPRESSAO = { excelente: 'Excelente', bom: 'Bom', regular: 'Regular', ruim: 'Precisa melhorar' };
const LABELS_RECURSO = {
    troca_garra: 'Troca rápida de garra', modularidade: 'Sistema modular',
    movimentos: 'Precisão dos movimentos', design: 'Design e estrutura',
    controladora: 'Controladora programável'
};
const LABELS_RECOMENDARIA = { sim: 'Sim', talvez: 'Talvez', nao: 'Não' };

function carregarDashboard() {
    fetch(BASE_URL + 'backend/dashboard_data.php')
        .then(resposta => resposta.json())
        .then(dados => {
            desenharSankey(dados.sankey);
            desenharTreeMap(dados.treemap);
            desenharGauge(dados.gauge);
            desenharCalendar(dados.calendario);
            desenharTabela(dados.usuarios);
        })
        .catch(erro => {
            console.error('Erro ao carregar dashboard:', erro);
        });
}

function desenharSankey(linhas) {
    const data = new google.visualization.DataTable();
    data.addColumn('string', 'De');
    data.addColumn('string', 'Para');
    data.addColumn('number', 'Total');

    const rows = linhas.map(l => [
        LABELS_IMPRESSAO[l.impressao] || l.impressao,
        'Recomenda: ' + (LABELS_RECOMENDARIA[l.recomendaria] || l.recomendaria),
        parseInt(l.total)
    ]);
    data.addRows(rows);

    const chart = new google.visualization.Sankey(document.getElementById('chart_sankey'));
    chart.draw(data, { sankey: { node: { label: { fontSize: 12 } } } });
}

function desenharTreeMap(linhas) {
    const data = new google.visualization.DataTable();
    data.addColumn('string', 'Recurso');
    data.addColumn('string', 'Pai');
    data.addColumn('number', 'Tamanho');
    data.addColumn('number', 'Cor');

    const rows = [['Recursos', null, 0, 0]];
    linhas.forEach(l => {
        const total = parseInt(l.total);
        rows.push([LABELS_RECURSO[l.recurso_destaque] || l.recurso_destaque, 'Recursos', total, total]);
    });
    data.addRows(rows);

    const chart = new google.visualization.TreeMap(document.getElementById('chart_treemap'));
    chart.draw(data, { minColor: '#a3c9e2', midColor: '#4f96a0', maxColor: '#034a97' });
}

function desenharGauge(media) {
    const data = google.visualization.arrayToDataTable([
        ['Label', 'Value'],
        ['Satisfação', media]
    ]);
    const chart = new google.visualization.Gauge(document.getElementById('chart_gauge'));
    chart.draw(data, { min: 0, max: 100, greenFrom: 75, greenTo: 100, yellowFrom: 50, yellowTo: 75, redFrom: 0, redTo: 50 });
}

function desenharCalendar(linhas) {
    const data = new google.visualization.DataTable();
    data.addColumn({ type: 'date', id: 'Data' });
    data.addColumn({ type: 'number', id: 'Cadastros' });

    const rows = linhas.map(l => {
        const [ano, mes, dia] = l.dia.split('-').map(Number);
        return [new Date(ano, mes - 1, dia), parseInt(l.total)];
    });
    data.addRows(rows);

    const chart = new google.visualization.Calendar(document.getElementById('chart_calendar'));
    chart.draw(data, { title: 'Cadastros de usuários' });
}

function desenharTabela(usuarios) {
    const data = new google.visualization.DataTable();
    data.addColumn('string', 'Nome');
    data.addColumn('string', 'Email');
    data.addColumn('string', 'Cargo');
    data.addColumn('string', 'Ativo');
    data.addColumn('string', 'Cadastro em');

    const rows = usuarios.map(u => [
        u.nome, u.email, u.cargo, u.ativo == 1 ? 'Sim' : 'Não', u.data_criacao
    ]);
    data.addRows(rows);

    const chart = new google.visualization.Table(document.getElementById('chart_table'));
    chart.draw(data, { showRowNumber: true, width: '100%', sortColumn: 4, sortAscending: false });
}
</script>

<?php include 'patterns/footer.php'; ?>     