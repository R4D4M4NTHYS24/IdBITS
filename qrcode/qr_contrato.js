  var qrcode_e = new QRCode(document.getElementById("qrcode_e"), {
    width : 100,
    height : 100
  });

  var qrcode_r = new QRCode(document.getElementById("qrcode_r"), {
    width : 100,
    height : 100
  });

  function makeCode () {		
    owner_e = document.getElementById("owner_e").innerText;
    owner_r = document.getElementById("owner_r").innerText;
    
    if (!owner_e || !owner_r) {
      alert("No fue posible leer clave publica para generar QR");
      owner_e.focus();
      return;
    }
    
    qrcode_e.makeCode(owner_e);
    qrcode_r.makeCode(owner_r);
  }
