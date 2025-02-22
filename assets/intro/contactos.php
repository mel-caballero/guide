<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Contactos</h2><script>console.log("Aquí ando")</script>
  </header>
  <article class="card-body">
    <table id="table" class="table table-responsive table-striped pt-5">
      <thead class="main-color">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Tipo</th>
          <th scope="col">Contacto</th>
          <th scope="col">Ubicación</th>
          <th scope="col">Teléfono</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </article>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      function checkJQuery() {
      if (typeof jQuery !== "undefined") {
          console.log("jQuery cargado correctamente. Ejecutando DataTables...");

          let table = $('#table').DataTable({
              info: true,
              paging: true,
              ordering: true,
              searching: true,
              dom: '<"row py-3"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
                  '<"row py-3"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>' +
                  '<"row"<"col-sm-12"t>>' +
                  '<"row"<"col-sm-12 col-md-12"p>>',
              ajax: 'assets/intro/contactos_data.php',
              columns: [
                  { data: 'nombre' },
                  { data: 'descripcion' },
                  { data: 'tipo' },
                  {
                      data: 'web',
                      render: function (data, type, row, meta) {
                          let enlaces = '';
                          if (data !== '') {
                              enlaces += '<a href="' + data + '" title="Se abrirá una nueva ventana"><span class="bi bi-globe"></span></a> ';
                          }

                          if (row.linkedin !== '') {
                              enlaces += '<a href="' + row.linkedin + '" title="Se abrirá una nueva ventana"><span class="bi bi-linkedin"></span></a> ';
                          }

                          if (row.correo !== '') {
                              enlaces += '<a href="mailto:' + row.correo + '" title="Se abrirá una nueva ventana"><span class="bi bi-envelope-at"></span></a> ';
                          }

                          if (row.twitter !== '') {
                              enlaces += '<a href="' + row.twitter + '" title="Se abrirá una nueva ventana"><span class="bi bi-twitter"></span></a> ';
                          }

                          if (row.instagram !== '') {
                              enlaces += '<a href="' + row.instagram + '" title="Se abrirá una nueva ventana"><span class="bi bi-instagram"></span></a> ';
                          }

                          if (row.youtube !== '') {
                              enlaces += '<a href="' + row.youtube + '" title="Se abrirá una nueva ventana"><span class="bi bi-youtube"></span></a> ';
                          }

                          return enlaces;
                      }
                  },
                  { data: 'ubicacion' },
                  { data: 'telefono' }
              ]
          });

      } else {
          console.log("jQuery aún no está cargado. Reintentando en 50ms...");
          setTimeout(checkJQuery, 50);
      }
  }

  checkJQuery();
    });
</script>
