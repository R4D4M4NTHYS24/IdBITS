var IDu;
var IDcr;
var contrato_r;

function consultar_contratos_recibidos() {
    // debugger;
    console.log("Actualizando contratos*******************");
    contract.methods.address2IDu(owner).call().then(IDu => {
        console.log("IDu:" + IDu);
        total_IDcrs(IDu);
    })
}

function total_IDcrs(IDu) {
    contract.methods.IDu2totalIDcrs(IDu).call().then(n => {
        console.log("n:" + n);
        iterar_r(n, IDu);
    })
}

function iterar_r(n, IDu) {
    console.log("Iterando--------------------------")
    for (i = 0; i < n; i++) {
        console.log("i:" + i);
        contract.methods.IDu2IDcrs(IDu, i).call().then(IDcr => {
            leer_contrato_r(IDcr);
        })
    }
}

function leer_contrato_r(IDcr) {
    contract.methods.contratos(IDcr).call().then(contrato_r => {
        console.log("contrato: " + contrato_r[0] + "," + contrato_r[1] + "," + contrato_r[2] + "," + contrato_r[3] + "," + contrato_r[4] + "," + contrato_r[5] + "," + contrato_r[6] + ",");
        verificar_firma_r(contrato_r, IDcr, );
    })
}

function verificar_firma_r(contrato_r, IDcr) {
    contract.methods.IDc2estadofirma(IDcr).call().then(estado => {
        imprimir_fila_r(contrato_r, estado);
    })
}


function imprimir_fila_r(contrato_r, estado) {
    if (estado) {
        tabla_concretados = $('#tabla_concretados').DataTable();

        tabla_concretados.row.add([
            contrato_r[1],
            contrato_r[2],
            contrato_r[3],
            contrato_r[4],
            contrato_r[5],
        ]).draw(false);
    } else {

    }
    tabla_recibidos = $('#tabla_recibidos').DataTable();

    tabla_recibidos.row.add([
        contrato_r[0],
        contrato_r[2],
        contrato_r[3],
        contrato_r[4],
        contrato_r[5],
    ]).draw(false);
}