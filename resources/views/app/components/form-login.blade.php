<div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                <form method="POST" action="">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                        <label for="password">Senha</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary w-100">Entrar</button>
                </form>
                <div class="mt-3 text-center">
                    <p class="mb-0">Não tem conta? <a href="{{ route('user.create') }}">Cadastre-se</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
