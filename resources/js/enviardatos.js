


if (document.querySelector('.btnEnviarQuestion')) {


    document.querySelector('.btnEnviarQuestion').addEventListener('click', actualizarPregunta);


    function actualizarPregunta() {

      const  id = document.querySelector('#idquestionEditar').value;
      const  curso = document.querySelector('#cursoEditar').value;
      const  pregunta = document.querySelector('#preguntaEditar').value;
      const  uno = document.querySelector('#opcion_unoEditar').value;
      const  dos = document.querySelector('#opcion_dosEditar').value;
      const  tres = document.querySelector('#opcion_tresEditar').value;
      const  cuatro = document.querySelector('#opcion_cuatroEditar').value;
      const  respuesta = document.querySelector('#respuestaEditar').value;



      // if(curso !== '' && pregunta !== '' && uno !== ''  && dos !== '' && tres !== '' && cuatro !== '' && respuesta !== '') {

         let url =`/question/put/${document.querySelector('#idquestionEditar').value}`;

         const params = {
          curso: curso ,
          pregunta: pregunta,
          opcion_uno: uno ,
          opcion_dos: dos ,
          opcion_tres: tres ,
          opcion_cuatro: cuatro ,
          respuesta:  respuesta,
      }
         axios.put(url, params).then(respuesta => {

              location.reload()
         })

  //    }
  }
}
