<div class="row mt-5 pt-5">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Visualizar Lembretes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalhes do Lembrete</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-3 mb-5">
    <div class="col-12 col-md-8 col-lg-10 mx-auto p-4">
        <h3 class="text-center mb-4">Detalhes do Lembrete</h3>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Titulo</h3>
                <p class="card-text">Descricao</p>
                <p class="card-text">
                    <strong>Data e Hora: </strong> 11/11/11
                </p>
                <p class="card-text">
                    <strong>Status:</strong>
                    Status
                </p>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-between">
            <form action="#" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Deletar</button>
            </form>
            <form action="#" method="POST">
                @csrf
                <input type="hidden" name="done" value="1">
                <button type="submit" class="btn btn-outline-success">Marcar como concluído</button>
            </form>
        </div>
    </div>
</div>
