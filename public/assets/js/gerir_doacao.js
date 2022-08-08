function goConfirma(id) {
    var myUrl = 'confirma/' + id;
    Swal.fire({
        title: 'Tem certeza que deseja confirmar essa doação?',
        showDenyButton: true,
        confirmButtonText: 'Sim',
        denyButtonText: `Não`,
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Doação confirmada!',
                confirmButtonText: 'Ok',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'confirma/' + id;
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Doação não alterada', '', 'info');
        }
    })
}

function goCancela(id) {
    var myUrl = 'cancela/' + id;
    Swal.fire({
        title: 'Tem certeza que deseja cancelar essa doação?',
        showDenyButton: true,
        confirmButtonText: 'Sim',
        denyButtonText: `Não`,
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Doação cancelada!',
                confirmButtonText: 'Ok',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'cancela/' + id;
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Doação não alterada', '', 'info');
        }
    })
}