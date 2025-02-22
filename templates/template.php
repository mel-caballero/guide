<section id="card" class="card" aria-labelledby="titleSection">
  <header class="card-header text-center">
    <h2 id="titleSection">Título</h2>
  </header>
  <article class="card-body">
  </article>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    function checkJQuery() {
      if (typeof jQuery !== "undefined") {
        console.log("jQuery cargado correctamente. Ejecutando DataTables...");

        // Inserta aquí el código que necesita AJAX

      } else {
        console.log("jQuery aún no está cargado. Reintentando en 50ms...");
        setTimeout(checkJQuery, 50);
      }
    }   
    checkJQuery();
  });
</script>