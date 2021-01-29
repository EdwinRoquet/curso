if (document.querySelector('.table')) {



    document.querySelector('.table').addEventListener('click', cambiarEstado);

        function cambiarEstado(e){
            // e.preventDefault();
            // console.log(e.target.getAttribute('estado'));

             if (e.target.classList.contains('bnt-estadoExam')) {
                 console.log('funciona')

            let estado ;
            let idExam = e.target.getAttribute('idExam');

            if (parseInt(e.target.getAttribute('estado')) === 1) {
                estado = 0;
                // console.log('jaja')
                e.target.setAttribute('estado', 0)
                e.target.textContent = 'Desactivado';
                e.target.classList.remove('btn-success');
                e.target.classList.add('btn-danger');

             }else{
                estado = 1;
                e.target.setAttribute('estado', 1)
                e.target.textContent = 'Activo';
                e.target.classList.remove('btn-danger');
                e.target.classList.add('btn-success');
             }

            //  Enviar peticion por Axios
             const params = {
                 estado: estado
             }
             const headers = {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
             }
             axios.post('/exam/estado/'+ idExam, params, headers)
                  .then(respuesta => console.log(respuesta))
                  .catch(error => console.log(error))

        }


        }
    }
