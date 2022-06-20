<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Entidades</h1>
    </div>

    <div class="row">
        <?php foreach ($entidades as $entidade) : ?>
            <div class="col-md-4">
                <div class="card border-primary text-center mb-3" style="max-width: 18rem; min-height: 16rem;">
                    <div class="card-header"><?= $entidade["cidade"] ?></div>
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <td><?= $entidade["nome"] ?></td>
                        </h5>
                        <p class="card-text">
                            <td><?= $entidade["descricao"] ?></td>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-primary">
                        <a href="<?= base_url() ?>entidadesdoacao/doar/<?= $entidade["id"] ?>" class="btn btn-primary">Doar</a>
                        <a href="#" class="btn btn-secondary disabled">Mais Informações</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>

<script>
    function goDelete(id) {
        var myUrl = 'entidades/edit/' + id;
        if (confirm("Deseja apagar este registro?")) {
            window.location.href = 'entidades/destroy/' + id;
        } else {
            alert("Registro não alterado");
            return false;
        }
    }
</script>