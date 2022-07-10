function ejemplo1() {
  alert("Bienvenimos al curso TW");
}

function ejemplo2() {
  let nombre;

  nombre = prompt("Ingresar su nombre");
  alert("Bienvenido " + nombre);
}

function ejemplo3() {
  let n1, n2, s;
  n1 = prompt("Ingresar 1er numero");
  n2 = prompt("Ingresar 2do numero");
  s = n1 + n2;
  document.writeln("La suma es " + s);
}

function ejemplo4() {
  document.writeln('<img src="img/descarga.jpg" width="" height="">');
}

function ejemplo5() {
  let resp;
  resp = confirm("Desea visitar la pagina UTP");
  if (resp) {
    window.location = "https://www.utp.edu.pe";
  } else {
    alert("Sera la proxima");
  }
}

function mostrarDatos() {
  let nom, gen, hob1, hob2, hob3;

  nom = document.getElementById('nombre').value;
  arrayGen = document.getElementsByName('genero');
  for (var i = 0; i < arrayGen.length; i++) {
    if (arrayGen[i].checked) {
      gen = arrayGen[i].value;
    }
  }
  civ = document.getElementById('civil').value;
  hob1 = document.getElementById('nadar').value;

  /*arrayHob1 = document.getElementById("nadar");
  if (arrayHob1[0].checked) {
    hob1 = "Nadar";
  }*/
  arrayHob2 = document.getElementsByName('leer');
  if (arrayHob2[0].checked) {
    hob2 = "Leer";
  }
  arrayHob3 = document.getElementsByName('cantar');
  if (arrayHob3[0].checked) {
    hob3 = "Cantar";
  }

  document.salida.respuestas.value =
    "Nombre: " + nom + "\n" +
    "Genero: " + gen + "\n" +
    "Estado Civil: " + civ + "\n" +
    "Hobbies: " + hob1 + " " + hob2 + " " + hob3;
}

function calcularPromedio() {
    let nom,n1,n2,prom;
    nom = document.frm_calProm.nombre.value;
    n1 = parseFloat(document.frm_calProm.n1.value);
    n2 = parseFloat(document.frm_calProm.n2.value);
    prom = (n1+n2)/2;

    document.frm_calProm.tarea_resp.value = "El alumno "+nom+" tiene como promedio "+prom;
}

function cambios1() {
  document.body.style.fontSize = '30px';
  document.body.style.background = '#86E1F8';
}

function cambios2() {
  document.body.style.fontSize = '16px';
  document.body.style.background = 'white';
}