function goConfirma(id) {
    var myUrl = 'confirma/' + id;
    if (confirm("Tem certeza que deseja confirmar essa doação?")) {
        window.location.href = 'confirma/' + id;
    } else {
        alert("Doação não alterada");
        return false;
    }
}

function goCancela(id) {
    var myUrl = 'cancela/' + id;
    if (confirm("Tem certeza que deseja cancelar essa doação?")) {
        window.location.href = 'cancela/' + id;
    } else {
        alert("Doação não alterada");
        return false;
    }
}