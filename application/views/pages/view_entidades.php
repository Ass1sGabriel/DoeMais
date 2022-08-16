<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Entidades</h5>
                    <p class="card-category">Gerir entidades <a type="button" class="btn-sm btn-outline-info btn-sm ml-2" href="<?= base_url() ?>entidades/new">Nova <i class="fa-solid fa-plus"></i></a></p>
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
                                        <td><?= $entidade["status"] == 1 ? "Ativa" : "Inativa" ?></td>
                                        <td>
                                            <?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
                                                <a href="<?= base_url() ?>entidades/edit/<?= $entidade["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:altera_status(<?= $entidade['id'] ?>)" class="btn btn-sm btn-danger"><i class="fa-solid fa-arrows-rotate"></i></a>
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
    // $.ajax({
	// 		url: "Sessao/get_filmes_sessao",
	// 		data: {
	// 			data: data,
	// 			cinema: cinema,
	// 			filme: $("#filme-id").val(),
	// 		},
	// 		noLoad: true,
	// 		type: "POST",
	// 		success: function (response) {
	// 			$("div.sessions").children().not("div#session-spin").remove();
	// 			$(response).insertBefore("div#session-spin");

	// 			$("div#session-spin").hide();

	// 			$('[data-toggle="tooltip"]').tooltip();
	// 		},
	// 	});
</script>