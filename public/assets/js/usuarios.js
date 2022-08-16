function altera_status(id) {
    var myUrl = 'usuarios/altera_status/' + id;

    Swal.fire({
        title: 'Atenção!',
        text: "Escolha com cuidado o novo status desse usuário!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativo',
        cancelButtonText: 'Inativo'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Deseja realmente definir esse usuário como ATIVO?',
                confirmButtonText: 'Confirmar',
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'usuarios/altera_status_ativo/' + id;
                }
            })
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Deseja realmente definir essa usuário como INATIVO?',
                confirmButtonText: 'Confirmar',
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'usuarios/altera_status_inativo/' + id;
                }
            })
        }
    })
}