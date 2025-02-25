<div class="container">
    <h1>Cadastrar Usuário</h1>
<form id="UsuarioForm" method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" maxlength="15" placeholder="(99) 99999-9999">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
