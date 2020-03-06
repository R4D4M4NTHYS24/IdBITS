pragma solidity ^0.5.0;

/** @title Talk and Code * */

//Creación del contrato
contract IdBITS {    //Definimos el nombre del contrato
    uint public IDc=0;                //Creamos una variable para llevar la cuenta de cuantos asistentes se han regitrado
    uint public IDu=0;
    address owner;

    constructor() public {
        owner = msg.sender;
    }
   
    function isOwner() view private returns(bool) {
        return msg.sender == owner;    
    }
   
    modifier onlyOwner {
        require(isOwner(), "Only owner can do that!");
        _;
    }

// Creamos una estrcutura donde definimos los datos que debemos almacenar de un asistente
    struct contrato {           //Definimos el nombre de la estructura
       string emisor;
       string receptor;
       string oficio;
       string periodo;
       string inicio;
       string horario;
       address owner;           //clave publica de la persona que registro la asistencia
    }
    struct usuario {
        string nombre;
        string email;
        address owner;
    }

   
    // creamos un listado de asistentes con la estructura definida anteriormente
   contrato[] public contratos;  
   usuario[] public usuarios;
   
    mapping (uint => uint[]) public IDu2IDcs;
    mapping (uint => uint[]) public IDu2IDcrs;
    mapping (uint => uint) public IDu2totalIDcs;
    mapping (uint => uint) public IDu2totalIDcrs;
    mapping (uint => uint) public IDu2totalFirmas;
    mapping (uint => uint[]) public IDu2Firmas;
    mapping (address => bool) public inscrito;
    mapping (address => uint) public address2IDu;
    mapping (uint => address) public IDu2address;
    mapping (uint => bool) public IDc2estadofirma;
    //mapping (string => uint) hash2IDc;
    mapping (string => uint) usermail2IDu;
    mapping (string => uint) user2IDu;
    mapping (address => uint) public saldo;
    mapping (uint => string) public IDc2salario;
    mapping (uint => string) public IDc2lugar;
    mapping (uint => string) public IDc2ciudad;
    mapping (uint => uint) public IDc2duracion;
    mapping (uint => string) public IDc2terminacion;
   
 
    //definimos una función en la cual se ingresan los datos de un nuevo registro al listado de asistentes
    function nuevo_contrato(string memory _emisor, string memory _receptor, string memory _oficio, string memory _salario, string memory _periodo, string memory _inicio, string memory _lugar, string memory _horario, uint _duracion, string memory _terminacion, string memory _ciudad) public { //la función es publica para permitir que cualquier persona pueda registrar la asistencia
        require(saldo[msg.sender]>=1);
        require(inscrito[msg.sender]);
        contratos.push(contrato(_emisor,_receptor,_oficio,_periodo,_inicio,_horario, msg.sender));
        IDc2salario[IDc]=_salario;
        IDc2lugar[IDc]=_lugar;
        IDc2duracion[IDc]=_duracion;
        IDc2ciudad[IDc]=_ciudad;
        IDc2terminacion[IDc]=_terminacion;
        IDu2IDcs[address2IDu[msg.sender]].push(IDc);
        IDu2totalIDcs[address2IDu[msg.sender]]++;
        IDu2IDcrs[user2IDu[_receptor]].push(IDc);
        IDu2totalIDcrs[user2IDu[_receptor]]++;
        saldo[msg.sender]-=1;
        IDc++;
    }
    function firmar_contrato(uint _IDc) public {
        require(saldo[msg.sender]>=1);
        require(inscrito[msg.sender]=true);
        IDc2estadofirma[_IDc]=true;
        IDu2Firmas[address2IDu[msg.sender]].push(_IDc);
        IDu2totalFirmas[address2IDu[msg.sender]]++;
        saldo[msg.sender]-=1;
    }
   
    function nuevo_usuario(string memory _nombre, string memory _email, address _owner) public onlyOwner{
        usuarios.push(usuario(_nombre,_email,_owner));
        inscrito[_owner]=true;
        address2IDu[_owner]=IDu;
        usermail2IDu[_email]=IDu;
        user2IDu[_nombre]=IDu;
        IDu+=1;
    }
    function recargar(address _pk_usuario, uint _valor) public onlyOwner{
        saldo[_pk_usuario]+=_valor;
    }
    //function consultarIDc(string memory _hash) public view returns(uint _IDc){
      //  return (hash2IDc[_hash]);
    //}
    function consultarIDu(string memory _mail) public view returns(uint _IDu){
        return (usermail2IDu[_mail]);
    }
}