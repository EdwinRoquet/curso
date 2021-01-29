const { default: Axios } = require("axios");
const { functions } = require("lodash");


if (document.querySelector('#Examen')) {



class Uiapp {


    pantallaInicioJuego(){

        const divPrincipal = document.createElement('div');
        divPrincipal.className = 'cajaPrincipal';
        divPrincipal.innerHTML = `
        <div class="cajaPrincipal">

        <div class="row mt-2 mb-2">
              <!-- Div de preguntas -->
            <div class=" col-md-12 p-2 cajaPreguntas text-center" id="pregunta"></div>
        </div>
             <div class="container mt-3  d-flex justify-content-center " id="iniciar">

                        <!-- Div de opciones -->
                      <div class="col-md-8  d-flex flex-wrap justify-content-center  cajaOpciones  " style="display: none;" >
                         <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary btn-block" " id="btn0" type="button"> <span id="opcion0">Respuesta</span> </button></div>
                         <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary btn-block" " id="btn1" type="button"> <span id="opcion1">Respuesta</span> </button></div>
                        <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary  btn-block"" id="btn2" type="button"> <span id="opcion2">Respuesta</span> </button></div>
                        <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary  btn-block"" id="btn3" type="button"> <span id="opcion3">Respuesta</span> </button></div>
                    </div>

             </div>

         </div>

        `;


        document.querySelector('.cajaPrincipal').remove();

        document.querySelector('.appexamen').appendChild(divPrincipal);




    }

    pantallaInicialApp(){

        const divPrincipal = document.createElement('div');
        divPrincipal.classList = 'container mt-3 d-flex   align-items-center   flex-column cajaPrincipal';

        const botonInicioApp = document.createElement('button');
        botonInicioApp.classList = 'btn btn-primary  iniciarJuego col-4';
        botonInicioApp.innerText = 'Jugar ahora';


        divPrincipal.appendChild(botonInicioApp);

        document.querySelector('.cajaPrincipal').remove();

        document.querySelector('.appexamen').appendChild(divPrincipal);

    }

    pantallaFinalApp(correctas, incorrectas, numPreguntas){

        const divPrincipal = document.createElement('div');
        divPrincipal.classList = 'container mt-3   d-flex justify-content-center cajaPrincipal';

        const resultado = document.createElement('div');
        resultado.classList = 'd-flex flex-column   resultadoFinal';
        resultado.innerHTML = `


                 <h3 text-center> Tu resultado es: </h3>
               <ul>
                 <li>Preguntas correctas: ${correctas}</li>
                 <li>Preguntas incorrectas: ${incorrectas}</li>
                 <li>Numero de preguntas: ${numPreguntas}</li>
               </ul>

             <button class="btn btn-primary text-center" onclick="location.reload();">Volver</button>

        `;

        divPrincipal.appendChild(resultado);

        document.querySelector('.cajaPrincipal').remove();

        document.querySelector('.appexamen').appendChild(divPrincipal);

    }

}



class Quiz {

    constructor(preguntas){
        this.preguntas = preguntas;
        this.indexPreguntas = 0;
        this.resCorrecta = 0;
        this.resIncorrecta = 0;
        this.score = 0;
        this.sinRespuesta = 0;
    }

    // asignarValor(preguntas){
    //     this.preguntas = preguntas;
    // }


    obtnerPreguntaIndex(){
        return this.preguntas[this.indexPreguntas];
       }

    finPreguntas(){
        return this.preguntas.length === this.indexPreguntas;

    }

    adivinar(respuesta){
        if (this.obtnerPreguntaIndex().respuestaCorrecta(respuesta)) {
            this.resCorrecta++;
           }else{
               this.resIncorrecta++;
           }
            this.indexPreguntas++;
            this.score++;



   }

   mostrarPuntaje(){

       const cajaRespuesta = document.querySelector('.Resultados');
       document.querySelector('.Resultados').removeChild(document.querySelector('.eliminarCaja'));
       let divRespuesta = document.createElement('div');
       divRespuesta.classList = 'eliminarCaja row d-flex justify-content-around'

      divRespuesta.innerHTML = `
      <div class="text text-center col-md-4">Respuesta correctas: <span>${this.resCorrecta}</span></div>
      <div class="text text-center col-md-4">Respuesta Incorrectas: <span>${this.resIncorrecta}</span></div>
      <div class="text text-center col-md-4">Numero de Pregunta: <span> ${this.score}  </span></div>
      `;
      cajaRespuesta.appendChild(divRespuesta);
   }




}


class Preguntas{

   constructor(texto, opciones, respuesta){
       this.texto = texto;
       this.opciones = opciones;
       this.respuesta = respuesta;
   }


   respuestaCorrecta(opciones){
       return opciones == this.respuesta;

   }


}

const exam = document.querySelector('#Examen').value;
let array = JSON.parse(exam);
let preguntas = [];
array.forEach(question => {
        // console.log(question)
preguntas.push( new Preguntas(question.pregunta, JSON.parse(question.opciones),  question.respuesta));
});



function iniciarApp() {

   if (quiz.finPreguntas()){
    //    stop();

    const  idExamen = document.getElementById('idExamen').value;
    const url = `/exam/put/${idExamen}`;

    const params = {
        pre_acertadas:quiz.resCorrecta,
        incorrectas:quiz.resIncorrecta,
        total:quiz.score,
        calificacion:(quiz.resCorrecta / quiz.score )*100 ,
        activa: 1,

    }

       Axios.put(url, params).then(respuesta => {
                //  console.log(respuesta)
                 if (respuesta.data === 'correcto') {
                    Swal.fire({
                        // position: 'top-end',
                        icon: 'success',
                        title: 'Has terminado tu examen',
                        showConfirmButton: false,
                        timer: 1500
                      })

                    //   window.history.back()
                      location.href = '/mi-curso';
                 }
       });


       interfaz.pantallaFinalApp( quiz.resCorrecta,quiz.resIncorrecta,quiz.score);
       quiz.mostrarPuntaje();

   } else {
       let elemento = document.getElementById('pregunta');
       elemento.innerHTML = quiz.obtnerPreguntaIndex().texto;
       // opciones
       var opcion = quiz.obtnerPreguntaIndex().opciones;
       for (let i = 0; i < opcion.length; i++) {
           let elemento = document.getElementById('opcion' + i);
           adivinarOpcion("btn" + i, opcion[i]);
           elemento.innerText = opcion[i];
       }
       quiz.mostrarPuntaje();
   }
}



function adivinarOpcion(id, opcion) {
   let button = document.getElementById(id);
   button.onclick = function() {
       quiz.adivinar(opcion);
       // console.log(opcion);
       iniciarApp();
   }
}

let quiz = new Quiz(preguntas);
// console.log(quiz);


let interfaz = new Uiapp();

interfaz.pantallaInicialApp();


//
document.querySelector('.iniciarJuego').addEventListener('click', function (e) {


    interfaz.pantallaInicioJuego();

    iniciarApp();
});


}




// window.onload = function() {
//     pantalla = document.getElementById("screen");
//  }
//  var isMarch = false;
//  var acumularTime = 0;
//     //Inicia el cronometro
//  function start () {
//           if (isMarch == false) {
//              timeInicial = new Date();
//              control = setInterval(cronometro,10);
//              isMarch = true;
//              }
//           }
//       //Declaramos las propiedades y caracteristicas del cronometro
//  function cronometro () {
//           timeActual = new Date();
//           acumularTime = timeActual - timeInicial;
//           acumularTime2 = new Date();
//           acumularTime2.setTime(acumularTime);
//           cc = Math.round(acumularTime2.getMilliseconds()/10);
//           ss = acumularTime2.getSeconds();
//           mm = acumularTime2.getMinutes();
//           hh = acumularTime2.getHours()-18;
//           if (cc < 10) {cc = "0"+cc;}
//           if (ss < 10) {ss = "0"+ss;}
//           if (mm < 10) {mm = "0"+mm;}
//           if (hh < 10) {hh = "0"+hh;}
//           pantalla.innerHTML = hh+" : "+mm+" : "+ss+" : "+cc;
//            //Comparamos el tiempo para ejecutar la siguiente funciones
//           if( hh+" : "+mm+" : "+ss+" : "+cc  === "00 : 00 : 10 : 00"){
//              // si hay preguntas disponibles
//              if (quiz.finPreguntas()) {
//                 //Si no hay detenemos la aplicación
//                stop ();

//               }else{
//                 //Incrementamos el el index de las preguntas y  el score para cambiar de pregunta
//                quiz.score++;
//                quiz.indexPreguntas++;
//                 //Ejecutamos la funcion  que carga la nueva pregunta
//                iniciarApp();

//                 //Reseteamos la funcion
//                 reset();
//                 //Iniciamos el cronometro de nuevo
//                 start();
//               }


//           }
//           }
//     //Detenemos el cronometro
//  function stop () {
//           if (isMarch == true) {
//              clearInterval(control);
//              isMarch = false;
//              }
//           }


//  //Reseteamos el tiempo del cronometro
//  function reset () {
//           if (isMarch == true) {
//              clearInterval(control);
//              isMarch = false;
//              }
//           acumularTime = 0;
//           pantalla.innerHTML = "00 : 00 : 00 : 00";
//           }





