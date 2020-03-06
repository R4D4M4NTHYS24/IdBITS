//Relacion de tablas
var enviados = $('#tabla_enviados').DataTable();
var recibidos = $('#tabla_recibidos').DataTable();
var concretados = $('#tabla_concretados').DataTable();

click_env= document.getElementById("click_env");
click_rec= document.getElementById("click_rec");
click_con= document.getElementById("click_con");

//Click en la fila de tabla de recibidos
$('#tabla_recibidos').on('click', 'tbody tr', function() {
    datos_fila_r = recibidos.row(this).data();
    document.getElementById("firmante_r").value = datos_fila_r[1];
    document.getElementById("ID_r").value = datos_fila_r[0];
    click_env.click();
})

//Click en la fila de tabla de enviados
$('#tabla_enviados').on('click', 'tbody tr', function() {
    datos_fila_e = enviados.row(this).data();
    document.getElementById("firmante_e").value = datos_fila_e[1];
    document.getElementById("ID_e").value = datos_fila_e[0];
    click_rec.click();
})

//Click en la fila de tabla de enviados
$('#tabla_concretados').on('click', 'tbody tr', function() {
    datos_fila_c = concretados.row(this).data();
    document.getElementById("firmante_c").value = datos_fila_c[1];
    document.getElementById("ID_c").value = datos_fila_c[0];
    click_con.click();
})