<div class="row mt-5 pt-5">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reminders.index') }}">Visualizar Lembretes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalhes do Lembrete</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-3 mb-5">
    <div class="col-12 col-md-8 col-lg-10 mx-auto p-4">
        <h3 class="text-center mb-4">Detalhes do Lembrete</h3>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $reminder->title }}</h3>
                <p class="card-text">{{ $reminder->description }}</p>
                <p class="card-text">
                    <strong>Data e Hora: </strong> {{ $reminder->remind_at->format('d/m/Y H:i') }}
                </p>
                <p class="card-text">
                    <strong>Status:</strong>
                    @if($reminder->done)
                        <span class="badge bg-success">Concluído</span>
                    @else
                        <span class="badge bg-warning text-dark">Pendente</span>
                    @endif
                </p>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-between">
            <form action="{{ route('reminders.destroy', $reminder->id) }}" method="POST"
            onsubmit="return confirm('Tem certeza que deseja deletar este lembrete?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Deletar</button>
            </form>
            @if(!$reminder->done)
                <form action="{{ route('reminders.done', $reminder->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="done" value="1">
                    <button type="submit" class="btn btn-outline-success">Marcar como concluído</button>
                </form>
            @else
                <form action="{{ route('reminders.undone', $reminder->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="done" value="0">
                    <button type="submit" class="btn btn-outline-warning">Marcar como pendente</button>
                </form>
            @endif
        </div>
    </div>
</div>
