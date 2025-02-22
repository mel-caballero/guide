<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Idioma</h2>
  </header>
  <article class="card-body">
    <h3>Idioma de la página</h3>
    <p>Es fundamental especificar el idioma principal de una página web dentro del código HTML. Esto permite que las tecnologías de asistencia, como los lectores de pantalla, identifiquen correctamente el idioma y lo anuncien o cambien su configuración según sea necesario. Además, los motores de búsqueda y navegadores pueden utilizar esta información para mejorar la indexación y la accesibilidad del contenido.</p>
    <p>Para definir el idioma principal de una página web, se usa el atributo "lang" en la etiqueta <code>&lt;html&gt;</code>:</p>
    <p><code><pre>
      &lt;html lang="es-ES"&gt;
    </pre></code></p>
    <h3>Idioma de las partes</h3>
    <p>En el caso de que tengamos contenido en un idioma diferente al principal de la página, es importante que se especifique el idioma de esas partes.</p>
    <h4>Ejemplo con la etiqueta "span"</h4>
    <p>Si no se puede asignar el idioma a la etiqueta completa porque no aplica, se puede usar la etiqueta <code>&lt;span&gt;</pre></code>. Por ejemplo:</p>
    <p><code><pre>
      &lt;p&gt;Este texto está en español &lt;span lang="en-GB"&gt;but this text it's written in English&lt;/span&gt;
    </pre></code></p>
    <h4>Ejemplo con etiquetas contenedoras</h4>
    <p>Si un bloque completo de contenido está en otro idioma, es recomendable aplicar el atributo lang a una etiqueta estructural como <code>&lt;div&gt;</code> o a un encabezado:</p>
    <p><code><pre>
      &lt;div lang="fr-FR"&gt;</br>
        &lt;h2&gt;Bienvenue sur notre site&lt;/h2&gt;</br>
        &lt;p&gt;Nous avons des informations importantes pour vous.&lt;/p&gt;<br>
      &lt;/div&gt;
    </pre></code></p>
  </article>
</section>