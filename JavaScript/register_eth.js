rol=document.getElementById("ROL");
mail=document.getElementById("mail");
nombre=document.getElementById("name");
pubkey=document.getElementById("pubkey");
function crear_billetera() {
    //Password de usuario 
    if (rol.value && password.value && cpassword.value && password.value==cpassword.value && mail.value && nombre.value)
    {
      password = document.getElementById("password").value;
      account = web3.eth.accounts.create();
      owner = account.address;
      pubkey.value=owner;
      jsonf = web3.eth.accounts.encrypt(account.privateKey, password);
      account1 = '0x186a991219b1ccC102e187446b27e3C70Fc696aB';
      privateKey1 = '90E30661C3B65EA1DECDF51D55923E4A0069F596A678FFCFBEB965E1C769CF89';
         
      console.log("email:"+mail.value);
      console.log("pass:"+password);
      console.log("owner:"+owner);
     
      web3.eth.getTransactionCount(account1,(err,txCount) => {
       //const data =contract.methods.newHash(nombre,cc,correo,fecha).encodeABI()
       const data =contract.methods.nuevo_usuario(nombre.value, mail.value, owner).encodeABI();
          //Build the transaction
          console.log(txCount)
          const txObject = {
              'nonce' : web3.utils.toHex(txCount), 
              'gasLimit': web3.utils.toHex(1000000) ,
              'gasPrice': web3.utils.toHex(web3.utils.toWei('10','gwei')),
              'to': contractAddress,
              'data': data,
              'chainId': web3.utils.toHex(4),
          }
     
      const signPromise = web3.eth.accounts.signTransaction(txObject, privateKey1);
     
      signPromise.then((signedTx)=> {
         const sentTx = web3.eth.sendSignedTransaction(signedTx.rawTransaction);
         signPromise.onload=mensaje(jsonf) 
     
         sentTx.on("receipt", receipt => {
             console.log(receipt)
             var hash1 = receipt.transactionHash
             document.getElementById("hash").innerHTML =receipt.transactionHash;
         });
         sentTx.on("error",err => {
             console.log(err)
         });
      }).catch((err)=>{
         console.log(err)
      });
    
   
      });  
    }
    else {
      console.log("email:"+mail.value);
      console.log("nombre:"+nombre.value);
      console.log("rol:"+rol.value);
      console.log("pass:"+password.value);
      swal({
        type: 'error',
        title: 'Faltan Datos',
        text: 'Debes llenar todos los campos para poder realizar el registro.',
      })
    }
}
function mensaje(jsonf){
    swal({
        title: 'Bienvenido a la 4ta revolución Industrial',
        text: 'Ahora puedes firmar tus contratos digitalmente con la tecnología Blockchain',
        type: 'success',
        showCancelButton: false,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Descargar Firma!',
        // cancelButtonText: false
      }).then((isConfirm) => {
        if (isConfirm) {
          descargar_billetera(jsonf);
          swal("Atención!", "Recuerda que para firmar tus contratos debes usar el archivo que acabas de descargar y la contraseña con la que lo creaste ", "success").then((isConfirm) => {
            if (isConfirm) {
              boton_register.click();
            }
            else 
            {
                // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
              }
            }); 
          // handle Confirm button click
        } else {
          // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
        }
      });

    function descargar_billetera(jsonf){
    var data = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(jsonf));
    $('<a id="descargar" target="_blank" href="data:' + data + '" download="Firma '+nombre.value+' IdBITS.SLE"></a>').appendTo('#container');
    var descarga = document.getElementById("descargar");
    var boton_register = document.getElementById("boton_register");
    descarga.click();
    }
}