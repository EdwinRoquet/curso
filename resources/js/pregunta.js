if(document.querySelector('.modulopre')){
    document.querySelector('.modulopre').addEventListener('click', obtenerPregunta);

    function obtenerPregunta(e){

    if (e.target.classList.contains('btnQuestion')) {

     let idPregunta = e.target.getAttribute('dada-id');
    const headers = {
       'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
    }
    axios.get('/question/edit/'+ idPregunta, headers)
         .then(respuesta =>  llenarInputs(respuesta.data))
         .catch(error => console.log(error))

    function llenarInputs(question){

        let  arr;
        arr = JSON.parse(question.opciones);

       document.querySelector('#idquestionEditar').value = question.id;
       document.querySelector('#cursoEditar').value = question.curso_id;
       document.querySelector('#preguntaEditar').value = question.pregunta;
       document.querySelector('#opcion_unoEditar').value = arr[0];
       document.querySelector('#opcion_dosEditar').value = arr[1];
       document.querySelector('#opcion_tresEditar').value = arr[2];
       document.querySelector('#opcion_cuatroEditar').value = arr[3];
       document.querySelector('#respuestaEditar').value = question.respuesta;
    }

    }
}

}





