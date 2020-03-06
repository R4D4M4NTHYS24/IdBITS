var IDu;
var IDc;
var contrato;

function consultar_contratos_enviados() {
    // debugger;
    console.log("Actualizando contratos*******************");
    contract.methods.address2IDu(owner).call().then(IDu => {
        console.log("IDu:" + IDu);
        total_IDcs(IDu);
    })
}

function total_IDcs(IDu) {
    contract.methods.IDu2totalIDcs(IDu).call().then(n => {
        console.log("n:" + n);
        iterar(n, IDu);
    })
}

function iterar(n, IDu) {
    console.log("Iterando--------------------------")
    for (i = 0; i < n; i++) {
        console.log("i:" + i);
        contract.methods.IDu2IDcs(IDu, i).call().then(IDc => {
            leer_contrato(IDc);
        })
    }
}

function leer_contrato(IDc) {
    contract.methods.contratos(IDc).call().then(contrato => {
        console.log("contrato: " + contrato[0] + "," + contrato[1] + "," + contrato[2] + "," + contrato[3] + "," + contrato[4] + "," + contrato[5] + "," + contrato[6] + ",");
        verificar_firma(contrato, IDc, );
    })
}

function verificar_firma(contrato, IDc) {
    contract.methods.IDc2estadofirma(IDc).call().then(estado => {
        imprimir_fila(contrato, estado);
    })
}


function imprimir_fila(contrato, estado) {
    if (estado) {
        tabla_concretados = $('#tabla_concretados').DataTable();

        tabla_concretados.row.add([
            contrato[1],
            contrato[2],
            contrato[3],
            contrato[4],
            contrato[5],
        ]).draw(false);
    } else {

    }
    tabla_enviados = $('#tabla_enviados').DataTable();

    tabla_enviados.row.add([
        contrato[1],
        contrato[2],
        contrato[3],
        contrato[4],
        contrato[5],
    ]).draw(false);
}