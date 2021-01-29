if (document.querySelector('.table')) {
document.querySelector('.table').addEventListener('click', function(e){
  if (e.target.getAttribute('idArchivo')) {
      let idArchivo = e.target.getAttribute('idArchivo');
      document.getElementById('idArchivo').value = idArchivo;
  }
});
}
