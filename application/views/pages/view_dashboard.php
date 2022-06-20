<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
	</div>
	
	<div class="text-center">
		<?= $this->session->flashdata('erro_adm'); ?>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Novas Entidades</h2>
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
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>