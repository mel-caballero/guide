<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Metodología informe</h2>
  </header>
  <article class="card-body">
    <p class="pb-4">NOTA: El contenido se basa en la UNE 301549 y se presenta de manera estructurada y simplificada. Cualquier error es inadvertido. Si necesita aclaraciones sobre el contenido, no dude en contactarme.</p>
    <a href="https://www.w3.org/TR/WCAG-EM/" class="externalLink">Website Accessibility Conformance Evaluation
      Methodology (WCAG-EM) 1.0</a>
    <h3>Paso 1 : Definir el alcance</h3>
    <ul>
      <li>Definir el ámbito de evaluación</li>
      <li>Nivel que se aplicará de las pautas WCAG</li>
      <li>Uso de ayudas técnicas y software de apoyo</li>
      <li>Tipo de acceso al sitio web (navegador, sistema operativo, ...)</li>
    </ul>

    <h3>Paso 2 : Explorar el sitio</h3>
    <ul>
      <li>Acceder a diferentes páginas de la web para observar qué tipo de páginas tiene.</li>
      <li>Observar el contenido de la página principal.</li>
      <li>Observar el tipo de páginas que pertenecen al sitio web.
      <ul>
        <li>Páginas con contenido diferente: texto, formularios, multimédia, ...</li>
        <li>Observar si hay funcionalidades básicas: sede electrónica, compra de entradas, ...</li>
      </ul></li>
      <li>Identificar la diversidad de páginas que hay en el sitio web.
      <ul>
        <li>Identificar la página principal y sus particularidades.</li>
        <li>Mirar si hay páginas con elementos comunes (tipo plantilla).</li>
      </ul></li>
      <li>Identificar las páginas que utilizen algún tipo de tecnología web (JavaScript, flash, ...).</li>
      <li>Identificar otras páginas relevantes.</li>
    </ul>
    <h3>Paso 3 : Seleccionar la muestra</h3>
    <p>La muestra se define como el conjunto de páginas que se revisarán en el análisis de cada sitio web. El número de
      páginas a analizar en cada sitio web será variable y dependerá del tamaño estimado y de la complejidad del sitio
      web, por lo que cada sitio web estará categorizado dentro de uno de los 3 niveles de complejidad siguientes:</p>
    <ul>
      <li>Baja, con una muestra de 17 páginas. Profundidad 4 y amplitud 4.</li>
      <li>Media, con una muestra de 33 páginas. Profundidad 4 y amplitud 8.</li>
      <li>Alta, con una muestra de 51 páginas. Profundidad 5 y amplitud 10.</li>
    </ul>
    <p>La selección de la muestra se realiza de forma automática mediante un proceso aleatorio en el que se seleccionan
      el total de páginas correspondientes a distintos niveles en la estructura de navegación del sitio web según el
      grado de complejidad. Además la muestra siempre contiene la página principal del sitio web.</p>
    <p>Debido a su carácter automático, la muestra únicamente incluirá páginas que estén directamente accesibles por
      internet para las que no sea necesaria una identificación previa o se requiera una acción específica manual.</p>
    <p>De forma excepcional puede que el rastreador no consiga obtener el total de páginas establecido, ya sea porque no
      puede seguir suficientes enlaces, o porque el sitio web no alcance ese número de páginas, por lo que en ese caso
      la muestra de páginas analizadas en el sitio web sería menor.</p>
    <p>Para el rastreo automático de páginas se parte de una URL inicial tomada como semilla, la cual se corresponde con
      la página principal del sitio web. A partir de dicha semilla, se realiza un rastreo con los valores de profundidad
      y amplitud que establezca la complejidad del sitio.</p>
    <p>Para comprender adecuadamente este rastreo, se introducen a continuación los conceptos de profundidad y amplitud:
    </p>
    <ul>
      <li>Profundidad. Mediante este valor se define el nivel de profundidad que alcanza el rastreo dentro de la
        estructura de navegación del sitio web. La profundidad alcanzada no se corresponde necesariamente con la
        profundidad dentro de la jerarquía de contenido del sitio web, sino que se refiere a la profundidad de
        navegación, es decir, el número de clics necesarios para llegar hasta la página. De esta forma, una página de
        profundidad 4 será aquella para la que ha sido necesario seguir cuatro enlaces desde la página principal para
        llegar a ella.</li>
      <li>Amplitud. Este parámetro hace referencia al número de páginas analizadas en cada nivel de profundidad, es
        decir, por cada nivel que el rastreador se adentre en el sitio web, se seleccionarán tantas páginas como vengan
        definidas en la amplitud.</li>
    </ul>
    <h3>Paso 4 : Auditar la muestra</h3>
    <h3>Paso 5 : Elaborar el informe</h3>


    <h3>Herramientas de evaluación</h3>
    <h4>Automáticas</h4>
    <ul>
      <li><a href="https://chrome.google.com/webstore/detail/siteimprove-accessibility/efcfolpjihicnikpmhnmphjhhpiclljc">SiteImprove</a></li>
      <li><a href="https://chromewebstore.google.com/detail/wave-evaluation-tool/jbbplnpkjmmeebjpijfedlgcdilocofh?pli=1">WAVE</a></li>
      <li><a href="https://chrome.google.com/webstore/detail/axe-devtools-web-accessib/lhdoppojpmngadmnindnejefpokejbdd">Axe Developer tools</a></li>
      <li><a href="https://chrome.google.com/webstore/detail/arc-toolkit/chdkkkccnlfncngelccgbgfmjebmkmce">ARCToolkit</a></li>
    </ul>
    <h4>Semiautomáticas</h4>
    <ul>
      <li><a href="https://chrome.google.com/webstore/detail/web-developer/bfbameneiokkgbdmiekhjnmfkcnldhhm?hl=es">Web DeveloperToolbar</a></li>
      <li><a href="https://chrome.google.com/webstore/detail/headingsmap/flbjommegcjonpdmenkdiocclhjacmbi">HeadingsMap</a></li>
      <li><a href="https://www.tpgi.com/color-contrast-checker/">Colour Contrast Analyser</a></li>
      <li><a href="https://color.a11y.com/">ColorA11y</a></li>
      <li><a href="https://validator.w3.org/">Validador automàtic de HTML del W3C</a></li>
      <li><a href="https://codepen.io/stevef/full/YLMqbo">Bookmarklet “Text spacing” espai de text</a></li>
      <li><a href="https://khan.github.io/tota11y/">BookMarklet “tota11y” diferents elements</a></li>
      <li><a href="http://matatk.agrip.org.uk/landmarks/">Visulitzar Landmarks</a></li>
      <li>Eina d'inspecció de HTML del navegador</li>
      <li>Adobe Acrobat Pro</li>
      <li>Eines Word i Powerpoint</li>
    </ul>
  </article>
</section>