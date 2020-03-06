function validar_formulario(){
    $('#alert_form').hide();
    $('#alert_pass').hide();
    validar_curso();
    validar_fecha();
    validar_nombre();
    validar_cedula();
    validar_nota();
    validar_link();
    validar_lugar();
    if (tipo_curso.value=="virtual"){
        if (curso.value!="" & fecha.value!="" & email_estudiante.value!=""  & nombre.value!="" & cedula.value!="" & link.value!=""){
            $('#staticModal').modal('show');;
        }
        else {
            $('#alert_form').show();  
        }
    }
    if (tipo_curso.value=="presencial"){
        if (curso.value!="" & fecha.value!="" & email_estudiante.value!="" & nombre.value!="" & cedula.value!="" & lugar.value!=""){
            $('#staticModal').modal('show');;
        }
        else {
            $('#alert_form').show();  
        }
    }
    if (tipo_curso.value=="semi-presencial"){
        if (curso.value!="" & fecha.value!="" & email_estudiante.value!="" & nombre.value!="" & cedula.value!="" & lugar.value!="" & link.value!=""){
            $('#staticModal').modal('show');;
        }
        else {
            $('#alert_form').show();  
        }
    }
}
function validar_curso(){
    if (curso.value==""){
        console.log("nombre vacio");
        $('#alert_form').show();
        $('#curso').removeClass('form-group').addClass('is-invalid form-group');
    }
    else {
        console.log("nombre: " + curso.value);
        $('#curso').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
    }
}
function validar_fecha(){
    if (fecha.value==""){
        console.log("nit vacio");
        $('#alert_form').show();
        $('#fecha').removeClass('form-group').addClass('is-invalid form-group');
    }
    else {
        console.log("fecha: " + fecha.value);
        $('#fecha').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
    }
}
function validar_nombre(){
    if (nombre.value==""){
        console.log("nombre vacio");
        $('#alert_form').show();
        $('#nombre').removeClass('form-group').addClass('is-invalid form-group');
    }
    else {
        console.log("nombre: " + nombre.value);
        $('#nombre').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
    }
}
function validar_email_estudiante(){
    if (email_estudiante.value==""){
        console.log("email vacio");
        $('#alert_form').show();
        $('#email_estudiante').removeClass('form-group').addClass('is-invalid form-group');
    }
    else if (validar_tipo_email($("#email_estudiante").val())){
        console.log("email: " + email_estudiante.value);
        $('#email_estudiante').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
        $('#alert_email').hide();
    }
    else {
        $('#alert_email').show();
    }
}
function validar_tipo_email(email_estudiante) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email_estudiante);
}
function validar_cedula(){
    if (cedula.value==""){
        console.log("cedula vacio");
        $('#alert_form').show();
        $('#cedula').removeClass('form-group').addClass('is-invalid form-group');
    }
    else {
        console.log("cedula: " + cedula.value);
        $('#cedula').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
    }
}
function validar_nota(){
    if (tipo_certificado.value=="calificación"){
        if (nota.value==""){
            console.log("nota vacio");
            $('#alert_form').show();
            $('#nota').removeClass('form-group').addClass('is-invalid form-group');
        }
        else {
            console.log("nota: " + nota.value);
            $('#nota').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
        }
    }
}
function validar_link(){
    console.log("Validando Link.............");
    console.log(tipo_curso.value);
    if (tipo_curso.value=="virtual" || tipo_curso.value=="semi-presencial"){
        if (link.value==""){
            console.log("link vacio");
            $('#alert_form').show();
            $('#link').removeClass('form-group').addClass('is-invalid form-group');
        }
        else {
            console.log("link: " + link.value);
            $('#link').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
        }
    }
}
function validar_lugar(){
    if (tipo_curso.value=="presencial" || tipo_curso.value=="semi-presencial"){
        if (lugar.value==""){
            console.log("lugar vacio");
            $('#alert_form').show();
            $('#lugar').removeClass('form-group').addClass('is-invalid form-group');
        }
        else {
            console.log("lugar: " + lugar.value);
            $('#lugar').removeClass('is-invalid form-group').addClass('is-valid form-control-sucess form-control');
        }
    }
}
