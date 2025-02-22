<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Viewport</h2>
  </header>
  <article class="card-body">
    <p>El viewport es el área visible de una página web en la pantalla de un dispositivo. En HTML, se configura mediante la metaetiqueta
    <code>&lt;meta name="viewport""&gt;</code>, lo que permite a la página adaptarse correctamente a distintos tamaños de pantalla, como en dispositivos móviles, tabletas y pantallas de escritorio.
    </p>
    <h3>Importancia del viewport en accesibilidad</h3>
    <p>Configurar correctamente el viewport es fundamental para garantizar que:</p>
    <ul>
      <li>El contenido sea legible sin necesidad de hacer zoom manualmente, beneficiando a personas con visión reducida.</li>
      <li>La página sea adaptable a diferentes dispositivos, evitando la necesidad de desplazamiento horizontal excesivo.</li>
      <li>Los usuarios que dependen de tecnologías de asistencia puedan interactuar con el contenido sin problemas de escala o diseño.</li>
    </ul>
    <h3>Configuración recomendada del viewport</h3>
    <p>La declaración más utilizada y accesible del viewport es:</p>

    <p><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code></p>
    <p>¿Qué significa esta configuración?</p>
    <ul>
      <li><code>width=device-width</code> La página ajusta su ancho al del dispositivo, evitando diseños desproporcionados.</li>
      <li><code>initial-scale=1</code> Establece un nivel de zoom inicial del 100%, asegurando que el contenido se muestre correctamente sin necesidad de ajustes manuales.</li>
    </ul>
  </article>
</section>