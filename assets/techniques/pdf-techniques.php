<section id="card" class="card">
  <header class="card-header text-center">
    <h2>PDF Techniques</h2>
  </header>
  <article class="card-body">
    <table id="table" class="table table-responsive pt-5" width="100%">
      <thead class="main-color">
        <tr>
          <th scope="col">Técnica</th>
          <th scope="col">Descripción</th>
          <th scope="col">Pasos</th>
          <th scope="col">Resultado esperado</th>
          <th scope="col">Criterio</th>
        </tr>
      </thead>
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
          paging: false,
          ordering: true,
          searching: false,
          dom:  '<"row py-3" <"col-sm-12 col-md-6" i> <"col-sm-12 col-md-6" f> >' +
                '<"row" <"col-sm-12" t> >' +
                '<"row py-3" <"col-sm-12 col-md-6" i> >',
          language: { url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json' },
          ajax: './assets/techniques/pdf-techniques_data.php',
          columns: [
            { data: 'tecnica',
              render: function (data, type, row, meta) {
                return '<a href="' + row.enlace + '">' + data + '</a>';
              },
            },
            { data: 'descripcion' },
            { data: 'pasos' },
            { data: 'resultado' },
            { data: 'criterio',
              render: function (data, type, row, meta) {
                return '<a href="' + row.link + '">' + data + '</a>';
              },
            },
          ],
        });

      } else {
        console.log("jQuery aún no está cargado. Reintentando en 50ms...");
        setTimeout(checkJQuery, 50);
      }
    }   
    checkJQuery();
  });
</script>