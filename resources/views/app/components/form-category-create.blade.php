<div class="row mt-5 pt-5">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastrar Categoria</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-3 mb-5">
    <div class="col-12 col-md-8 col-lg-10 mx-auto">
        <div class="card p-4 shadow-sm">
            <h3 class="text-center mb-4">Cadastrar Categoria</h3>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ old('name') }}">
                    <label for="name">Nome</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <label for="image">Imagem</label>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Formatos: JPG, JPEG, PNG, WEBP, GIF. Máx: 4MB.</div>
                </div>
                <button type="submit" class="btn btn-outline-success w-100">Salvar</button>
            </form>
            @if(session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
