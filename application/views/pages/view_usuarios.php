<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th width="27%">Nome</th>
					<th width="27%">Email</th>
					<th width="14%">Cidade</th>
					<th width="14%">Função</th>
					<th width="9%">Status</th>
					<th width="9%" align="center">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $usuario) : ?>
					<tr>
						<td><?= $usuario["id"] ?></td>
						<td><?= $usuario["nome"] ?></td>
						<td><?= $usuario["email"] ?></td>
						<td><?= $usuario["cidade"] ?></td>
						<td><?= $usuario["funcao"] ?></td>
						<td><?= $usuario["status"] ?></td>
						<td>
							<?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
								<a href="<?= base_url() ?>usuarios/edit/<?= $usuario["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
								<a href="javascript:goDelete(<?= $usuario['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
		var myUrl = 'usuarios/edit/' + id;
		if (confirm("Deseja apagar este registro?")) {
			window.location.href = 'usuarios/destroy/' + id;
		} else {
			alert("Registro não alterado");
			return false;
		}
	}
</script>