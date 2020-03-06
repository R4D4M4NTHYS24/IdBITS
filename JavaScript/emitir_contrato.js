emisor = document.getElementById("emisor");
receptor = document.getElementById("receptor");
oficio = document.getElementById("oficio");
salario = document.getElementById("salario");
periodo = document.getElementById("periodo");
lugar = document.getElementById("lugar");
inicio = document.getElementById("inicio");
horario = document.getElementById("horario");
ciudad = document.getElementById("ciudad");
duracion = document.getElementById("duracion");
terminacion = document.getElementById("terminacion");
function emitir_contrato(privateKeyUser, publicKeyUser) {
    console.log("emitiendo::::::::::::::::::::");
    console.log(emisor.innerText, receptor.innerText, oficio.innerText, salario.innerText, periodo.innerText, inicio.innerText, lugar.innerText, horario.innerText,duracion.innerText,terminacion.innerText,ciudad.innerText);
    contract.methods.saldo(publicKeyUser).call().then(saldo => {
        saldo.onload = verificar_saldo(saldo, privateKeyUser, publicKeyUser);
    })
}

function verificar_saldo(saldo, privateKeyUser, publicKeyUser) {
    if (saldo > 0) {
        emision(privateKeyUser, publicKeyUser);
    } else {
        sin_saldo();
    }
}

function emision(privateKeyUser, publicKeyUser) {
    web3.eth.getTransactionCount(publicKeyUser, (err, txCount) => {
        //const data =contract.methods.newHash(nombre,cc,correo,fecha).encodeABI()
        const data = contract.methods.nuevo_contrato(emisor.innerText, receptor.innerText, oficio.innerText, salario.innerText, periodo.innerText, inicio.innerText, lugar.innerText, horario.innerText,duracion.innerText,terminacion.innerText,ciudad.innerText).encodeABI();
        //Build the transaction
        console.log(txCount)
        const txObject = {
            'nonce': web3.utils.toHex(txCount),
            'gasLimit': web3.utils.toHex(1000000),
            'gasPrice': web3.utils.toHex(web3.utils.toWei('10', 'gwei')),
            'to': contractAddress,
            'data': data,
            'chainId': web3.utils.toHex(4),

            // 'nonce': txCount,
            //  'gasLimit': 1000000,
            //  'gasPrice': 10000,
            //  'to': contractAddress,
            //  'data': data,
            //  'chainId': 4,
        }

        const signPromise = web3.eth.accounts.signTransaction(txObject, privateKeyUser);

        signPromise.then((signedTx) => {
            const sentTx = web3.eth.sendSignedTransaction(signedTx.rawTransaction);
            console.log("Contrato Emitido********************");
            exito();

            sentTx.on("receipt", receipt => {
                console.log(receipt)
                var hash1 = receipt.transactionHash
                document.getElementById("hash").innerHTML = receipt.transactionHash;
            });
            sentTx.on("error", err => {
                console.log(err)
            });
        }).catch((err) => {
            console.log(err)
        });


    });
}

function exito() {
    swal({
        title: 'Nuevo Contrato',
        text: 'Tu nuevo contrato ha sido emitido con tu firma criptográfica en la Blockchain',
        type: 'success',
        showCancelButton: false,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Ver ID del Contrato',
        // cancelButtonText: false
    }).then((isConfirm) => {
        if (isConfirm) {
            contract.methods.IDc().call().then(IDc => {
                    IDc.onload = swal("Emitido!", "Tu nuevo contrato ha sido emitido bajo el ID:" + IDc, "success");

                })
                // handle Confirm button click
        } else {
            // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
        }
    });
}

function sin_saldo() {
    swal({
        title: 'Sin saldo',
        text: 'Debes recargar tu firma para emitir nuevas firmas',
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Recargar',
        // cancelButtonText: false
    }).then((isConfirm) => {
        window.location.replace("recargar_firma.php");
    });
}