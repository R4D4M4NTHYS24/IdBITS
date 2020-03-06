IDc=document.getElementById("ID").innerHTML;

oficio = document.getElementById("oficio");
periodo = document.getElementById("periodo");
inicio = document.getElementById("inicio");
horario = document.getElementById("horario");
salario = document.getElementById("salario");
lugar = document.getElementById("lugar");
duracion = document.getElementById("duracion");
ciudad = document.getElementById("ciudad");
terminacion = document.getElementById("terminacion");

function leer_contrato() {
    contract.methods.contratos(IDc).call().then(contrato => {
        console.log("contrato_r:"+contrato[2]);
        console.log("contrato_r:"+contrato[3]);
        console.log("contrato_r:"+contrato[4]);
        console.log("contrato_r:"+contrato[5]);
        //Llena las variables con los datos de la fila
        oficio.innerHTML = contrato[2];
        periodo.innerHTML = contrato[3];
        inicio.innerHTML = contrato[4];
        horario.innerHTML = contrato[5];
    })
}
function consultar_lugar(){
    contract.methods.IDc2lugar(IDc).call().then(lugarID => {
        console.log("lugar:"+lugarID);
        //Llena las variables con los datos de la fila
        lugar.innerHTML = lugarID;
        consultar_salario();
    })
}
function consultar_salario(){
    contract.methods.IDc2salario(IDc).call().then(salarioID => {
        console.log("salario:"+salarioID);
        //Llena las variables con los datos de la fila
        salario.innerHTML = salarioID;
        consultar_duracion();
    })
}
function consultar_duracion(){
    contract.methods.IDc2duracion(IDc).call().then(duracionID => {
        console.log("duracion:"+duracionID);
        //Llena las variables con los datos de la fila
        duracion.innerHTML = duracionID;
        consultar_ciudad();
    })
}
function consultar_ciudad(){
    contract.methods.IDc2ciudad(IDc).call().then(ciudadID => {
        console.log("ciudad:"+ciudadID);
        //Llena las variables con los datos de la fila
        ciudad.innerHTML = ciudadID;
        consultar_terminacion();
    })
}
function consultar_terminacion(){
    contract.methods.IDc2terminacion(IDc).call().then(terminacionID => {
        console.log("terminacion:"+terminacionID);
        //Llena las variables con los datos de la fila
        terminacion.innerHTML = terminacionID;
    })
}