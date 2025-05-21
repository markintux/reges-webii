<div class="row mt-5 pt-5">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visualizar Lembretes</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-3 mb-5">
    <div class="col">
        <div class="table-responsive">
            <h1 class="mb-5">Visualizar Lembretes</h1>
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if($reminders->count())
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Data e Hora</th>
                        <th class="text-center">Concluído</th>
                        <th>Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reminders as $reminder)
                        <tr>
                            <td>{{ $reminder->id }}</td>
                            <td>
                                <a href="{{ route('reminders.show', $reminder->id) }}">
                                    {{ $reminder->title }}
                                </a>
                            </td>
                            <td>{{ $reminder->remind_at->format('d/m/Y H:i') }}</td>
                            <td class="text-center">
                                @if($reminder->done)
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                @else
                                    <i class="fa-solid fa-circle-exclamation text-warning"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('reminders.edit', $reminder->id) }}" class="btn btn-outline-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $reminders->links() }}
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Não há lembretes cadastrados.
                </div>
            @endif
        </div>
    </div>
</div>
