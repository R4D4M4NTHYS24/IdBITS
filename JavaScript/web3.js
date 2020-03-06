Web3 = require('web3');       //Llamamos a la libreria web3 de javascript
const web3 = new Web3("https://rinkeby.infura.io/v3/142f507682594dba987b1d47b2b175e4"); //Definimos el punto de acceso INFURA
console.log("Conectado con Infura");     //Mensaje log para verificar la communicación
//Aca se definen las funciones del contrato inteligente MedidorUnergy.sol, cada que se actualice el contrato es necesario actualizar el ABI
const abi=[{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"IDdToOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"address2IDu","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"usuarios","outputs":[{"name":"IDusuario","type":"uint256"},{"name":"nombre","type":"string"},{"name":"nit","type":"string"},{"name":"email","type":"string"},{"name":"owner","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"IDu","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_curso","type":"string"},{"name":"_fecha","type":"string"},{"name":"_estudiante","type":"string"},{"name":"_cedula","type":"string"},{"name":"_tipo_certificado","type":"string"},{"name":"_modalidad","type":"string"},{"name":"_lugar","type":"string"},{"name":"_link","type":"string"},{"name":"_nota","type":"uint256"}],"name":"nuevo_certificado","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_nombre","type":"string"},{"name":"_nit","type":"string"},{"name":"_email","type":"string"},{"name":"_owner","type":"address"}],"name":"nuevo_usuario","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"certificados","outputs":[{"name":"IDdiploma","type":"uint256"},{"name":"curso","type":"string"},{"name":"fecha","type":"string"},{"name":"estudiante","type":"string"},{"name":"cedula","type":"string"},{"name":"tipo_certificado","type":"string"},{"name":"modalidad","type":"string"},{"name":"owner","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"IDd","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"IDd2nota","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"IDd2Lugar","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"IDd2Link","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"}];
const contractAddress = '0xd0921cc5e71b25a8b60171bd861c708caa4970b5'; //Esta es la dirección del contrato, debe actulizarse cada que se despliegue un nuevo contrato con cambios
contract = new web3.eth.Contract(abi, contractAddress); //Instancia el contrato en su versión ABI y la respectiva dirección con la lñibreria web3
