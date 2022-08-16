function altera_status(id) {
    var myUrl = 'entidades/altera_status/' + id;

    Swal.fire({
        title: 'Atenção!',
        text: "Escolha com cuidado o novo status dessa entidade!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativa',
        cancelButtonText: 'Inativa'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Deseja realmente definir essa entidade como ATIVA?',
                confirmButtonText: 'Confirmar',
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'entidades/altera_status_ativo/' + id;
                }
            })
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Deseja realmente definir essa entidade como INATIVA?',
                confirmButtonText: 'Confirmar',
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'entidades/altera_status_inativo/' + id;
                }
            })
        }
    })
}

function goDelete(id) {
    var myUrl = 'entidades/altera_status/' + id;
    if (confirm("Deseja apagar este registro?")) {

        window.location.href = 'entidades/altera_status/' + id;
    } else {
        alert("Registro não alterado");
        return false;
    }
}