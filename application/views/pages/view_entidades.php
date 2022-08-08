<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Entidades</h5>
                    <p class="card-category">Gerir entidades</p>
                </div>
                <div class="card-body ">
                    <div class="table">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="27%">Nome</th>
                                    <th width="25%">Email</th>
                                    <th width="14%">Cidade</th>
                                    <th width="14%">CNPJ</th>
                                    <th width="9%">Status</th>
                                    <th width="11%" align="center">Ações</th>
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
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Atualizado 3 minutos atrás
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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