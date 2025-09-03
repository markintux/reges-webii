<div class="row mt-5 pt-5">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visualizar Categorias</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-3 mb-5">
    <div class="col">
        <div class="table-responsive">
            <h1 class="mb-5">Visualizar Categorias</h1>
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if($categories->count())
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <a href="{{ route('categories.show', $category->id) }}">
                                    {{ $category->name }}
                                </a>
                            </td>
                            <td>
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                @else
                                    <span class="text-muted">Sem imagem</span>
                                @endif
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $categories->links() }}
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Não há categorias cadastradas.
                </div>
            @endif
        </div>
    </div>
</div>
