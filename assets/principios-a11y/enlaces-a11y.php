<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Enlaces de interés</h2>
  </header>
  <article class="card-body">
    <table id="table" class="table table-responsive table-light table-striped-columns pt-5">
      <thead class="table-dark">
        <tr>
          <th scope="col">Enlace</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
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
              paging: true,
              ordering: true,
              searching: true,
              dom : '<"row py-3"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
                '<"row py-3"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>' +
                '<"row"<"col-sm-12"t>>' +
                '<"row"<"col-sm-12 col-md-12"p>>',
              language: { url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json' },
              ajax: './assets/principios-a11y/enlaces-a11y_data.php',
              columns: [
                { data: 'nombre',
                  render: function (data, type, row, meta) {
                    return '<a href="' + row.enlace + '" class="text-decoration-none">' + data + ' <span class="bi bi-box-arrow-up-right" alt="Abre ventana nueva"></span></a>'
                  }, 
                }
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