function decrypt_wallet(rol) {
    passwordKey = document.getElementById("passwordkey").value;
    if (passwordKey == "") {
        console.log("Password Vacio");
        $('#alert_pass').show();
    }
    console.log("Desencriptando....");
    try {
        console.log(objeto_llave);
        verificar_llave(rol,objeto_llave, passwordKey)
    } catch (error) {
        console.log("Sin archivo");
        $('#alert_firma').show();
    }
    console.log(passwordKey);
}

function verificar_llave(rol,objeto_llave, passwordKey) {
    try {
        wallet = web3.eth.accounts.decrypt(objeto_llave, passwordKey);
        privateKeyUser = wallet.privateKey;
        publicKeyUser = wallet.address;
        console.log("Desencriptado completo.....................");
        console.log("llave privada: " + privateKeyUser);
        console.log("llave publica: " + publicKeyUser);
        if (rol==1){
            firmar_contrato_recibido(privateKeyUser, publicKeyUser);
        }
        else {
            emitir_contrato(privateKeyUser, publicKeyUser);
        }
    } 
    catch (error) {
        console.log("error******************")
        console.log(error);
        // clave_incorrecta();
    }
}

function clave_incorrecta() {
    swal({
        title: 'Clave Incorrecta',
        text: 'La contraseña no coincide con el archivo ingresado, intente de nuevo o cree una nueva firma',
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Nueva Firma',
        // cancelButtonText: false
    });
}