<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Criterios UNE EN-301 549</h2>
  </header>
  <article class="card-body">
    <p class="pb-4">NOTA: El contenido se basa en la UNE 301549 y se presenta de manera estructurada y simplificada. Cualquier error es inadvertido. Si necesita aclaraciones sobre el contenido, no dude en contactarme.</p>
    <table id="table" class="table table-responsive pt-5" width="100%">
      <thead class="main-color">
        <tr>
          <th scope="col">Proyecto</th>
          <th scope="col">ID Caso</th>
          <th scope="col">Test Type</th>
          <th scope="col">Resumen</th>
          <th scope="col">Descripción</th>
          <th scope="col">Técnicas</th>
          <th scope="col">Ejemplos</th>
          <th scope="col">Acción</th>
          <th scope="col">Datos</th>
          <th scope="col">Herramientas</th>
        </tr>
      </thead>
    </table>
  </article>
</section>

<script>
  $(document).ready(function () {
    
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    function checkJQuery() {
      if (typeof jQuery !== "undefined") {
        console.log("jQuery cargado correctamente. Ejecutando DataTables...");

        let table = $('#table').DataTable({
          info: true,
          paging: false, //true
          ordering: false,
          searching: true,
          dom : '<"row py-3" <"col-sm-12 col-md-6" B> <"col-sm-12 col-md-6" f> >' +
                '<"row" <"col-sm-12" t> >' +
                '<"row py-3" <"col-sm-12 col-md-6" i> >',
          language: { url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json' },
          ajax: './assets/une-web/criterios_data.php',
          buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ],
          columnDefs: [ {
            targets: [3, 4, 5, 6, 7, 8, 9],
            render: DataTable.render.ellipsis( 10, true )
          } ],
          columns: [
            { data: 'Proyecto' },
            { data: 'ID Caso' },
            { data: 'Test Type' },
            { data: 'Resumen' },
            { data: 'Descripción' },
            { data: 'Técnicas' },
            { data: 'Ejemplos' },
            { data: 'Acción' },
            { data: 'Datos' },
            { data: 'Herramientas' }
          ],
        });
        table.on('draw', function() {
          $('.externalLink').attr({title: 'Abre una ventana nueva', target: '_blank'});
        });

      } else {
        console.log("jQuery aún no está cargado. Reintentando en 50ms...");
        setTimeout(checkJQuery, 50);
      }
    }   
    checkJQuery();
  });
</script>