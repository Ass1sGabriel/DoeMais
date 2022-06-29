<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Entidades</h1>
        <div class="btn-group mr-2">
            <a href="<?= base_url() ?>entidades/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Cadastrar</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="27%">Nome</th>
                    <th width="27%">Email</th>
                    <th width="14%">Cidade</th>
                    <th width="14%">CNPJ</th>
                    <th width="9%">Status</th>
                    <th width="9%" align="center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($entidades as $entidade) : ?>
                    <tr>
                        <td><?= $entidade["id"] ?></td>
                        <td><?= $entidade["nome"] ?></td>
                        <td><?= $entidade["email"] ?></td>
                        <td><?= $entidade["cidade"] ?></td>
                        <td><?= $entidade["cnpj"] ?></td>
                        <td><?= $entidade["status"] ?></td>
                        <td>
                            <?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
                                <a href="<?= base_url() ?>entidades/edit/<?= $entidade["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="javascript:goDelete(<?= $entidade['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                            <?php else : ?>
                                <button disabled type="button" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <button disabled type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<script>
    function goDelete(id) {
        var myUrl = 'entidades/destroy/' + id;
        if (confirm("Deseja apagar este registro?")) {
            window.location.href = 'entidades/destroy/' + id;
        } else {
            alert("Registro não alterado");
            return false;
        }
    }
</script>