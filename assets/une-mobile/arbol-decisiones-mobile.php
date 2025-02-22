<section id="card" class="card">
  <header class="card-header text-center">
    <h2>Árbol de decisiones UNE EN-301 549</h2>
  </header>
  <article class="card-body">
    <p class="pb-4">NOTA: El contenido se basa en la UNE 301549 y se presenta de manera estructurada y simplificada. Cualquier error es inadvertido. Si necesita aclaraciones sobre el contenido, no dude en contactarme.</p>
    <p>En este apartado se ofrece una modificación del árbol de decisión de Loïc Martínez Normand en 2017i adaptado a la versión de la norma UNE-EN 301 549:2019 y específicamente al desarrollo de aplicaciones móviles.</p>
    <p>El objetivo del diseño del árbol de decisión es reducir el número inicial de 102 preguntas por cada uno de los requisitos que aplican a aplicaciones móviles a las actuales 13, siguiendo la misma estructura jerárquica de preguntas planteadas por Loïc Martínez Normand.</p>
    <hr>
    <p>En primer lugar, existen algunos requisitos del capítulo 5 y del capítulo 11 que tienen que considerarse en todo caso.</p>
    <!-- [Q1] -->
    <fieldset id="ques1" class="row mb-3">
      <legend class="col-form-label col-9">
        <strong>1. ¿Interacciona la APP con elementos accionables?</strong><br/>
        En el caso de que la APP interaccione con cualquier control físico o lógico de cualquier tipo como botones, pulsadores, palancas, etc.
      </legend>
      <div class="col-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1t" value="true">
          <label class="form-check-label" for="q1t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1f" value="false">
          <label class="form-check-label" for="q1f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q2] -->
    <fieldset id="ques2" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>2. ¿Interacciona la APP con controles de bloqueo o conmutación?</strong><br/>
        Estos controles son aquellos cuyo estado puede permanecer estable, como la tecla de bloqueo-mayúsculas o los botones de dos estados que se utilizan en las interfaces de usuario de configuración.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2t" value="true">
          <label class="form-check-label" for="q2t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2f" value="false">
          <label class="form-check-label" for="q2f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q3] -->
    <fieldset id="ques3" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>3. ¿Proporciona la APP comunicación bidireccional por voz?</strong><br/>
        La pregunta se refiere a si el sistema facilita la comunicación oral entre dos personas.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3t" value="true">
          <label class="form-check-label" for="q3t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3f" value="false">
          <label class="form-check-label" for="q3f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q4] 3.1. -->
    <fieldset id="ques4" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>3.1. ¿Proporciona la APP funcionalidad RTT?</strong>
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4t" value="true">
          <label class="form-check-label" for="q4t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4f" value="false">
          <label class="form-check-label" for="q4f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q5] 3.2. -->
    <fieldset id="ques5" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>3.2. ¿Proporciona la APP comunicación bidireccional de video?</strong><br/>
        Si además de comunicación oral, proporciona comunicación por video debe cumplir con ciertos requisitos de calidad que faciliten la comunicación en lengua de signos o la lectura labial.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5t" value="true">
          <label class="form-check-label" for="q5t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5f" value="false">
          <label class="form-check-label" for="q5f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q6] Q.4. -->
    <fieldset id="ques6" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>4. ¿Tiene la APP capacidad de video?</strong><br/>
        Esto quiere decir de un sistema que permita reproducir, transmitir, grabar contenidos de video. Aplicando requisitos sobre los subtítulos para las personas con deficiencias auditivas y la audiodescripción para las personas con problemas de visión.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6t" value="true">
          <label class="form-check-label" for="q6t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6f" value="false">
          <label class="form-check-label" for="q6f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q7] Q.5. -->
    <fieldset id="ques7" class="row mb-3">
      <legend class="col-form-label col-9">
        <strong>5. ¿Se trata de una APP con interfaz de usuario?</strong><br/>
        El sistema tiene controles físicos o lógicos de cualquier tipo (botones, pulsadores, palancas, etc.).
      </legend>
      <div class="col-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7t" value="true">
          <label class="form-check-label" for="q7t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7f" value="false">
          <label class="form-check-label" for="q7f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q8] Q.5.1. -->
    <fieldset id="ques8" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>5.1. ¿La funcionalidad de la app permite el acceso de productos de apoyo?</strong>
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8t" value="true">
          <label class="form-check-label" for="q8t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8f" value="false">
          <label class="form-check-label" for="q8f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q9] Q.5.2 -->
    <fieldset id="ques9" class="row mb-3">
      <legend class="col-form-label col-9">
        <strong>5.2. ¿La funcionalidad de la app es cerrada?</strong>
      </legend>
      <div class="col-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9t" value="true">
          <label class="form-check-label" for="q9t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9f" value="false">
          <label class="form-check-label" for="q9f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q10] Q.6. -->
    <fieldset id="ques10" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>6. ¿Permite el software el acceso de los productos de apoyo?</strong><br/>
        Se aplican requisitos de la interoperabilidad entre la APP y los productos de apoyo.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10t" value="true">
          <label class="form-check-label" for="q10t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10f" value="false">
          <label class="form-check-label" for="q10f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q11] Q.7 -->
    <fieldset id="ques11" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>7. ¿El software es una herramienta de autor?</strong><br/>
        Si el software permite editar y gestionar contenidos entonces se considera que es una herramienta de autor y se aplican requisitos específicos de accesibilidad.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q11" id="q11t" value="true">
          <label class="form-check-label" for="q11t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q11" id="q11f" value="false">
          <label class="form-check-label" for="q11f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q12] Q.8. -->
    <fieldset id="ques12" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>8. ¿Incluye la APP documentación de la misma?</strong><br/>
        La documentación de la APP deberá cubrir las características de accesibilidad de la APP y en si misma ser accesible.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q13" id="q13t" value="true">
          <label class="form-check-label" for="q13t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q13" id="q13f" value="false">
          <label class="form-check-label" for="q13f">No</label>
        </div>
      </div>
    </fieldset>
    <!-- [Q13] Q.9. -->
    <fieldset id="ques13" class="row mb-3">
      <legend class="col-form-label col-10">
        <strong>9. ¿Se incluyen servicios de apoyo?</strong><br/>
        Los servicios son los servicios de atención al cliente.
      </legend>
      <div class="col-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q12" id="q12t" value="true">
          <label class="form-check-label" for="q12t">Sí</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q12" id="q12f" value="false">
          <label class="form-check-label" for="q12f">No</label>
        </div>
      </div>
    </fieldset>
  </article>
  <footer class="card-footer">
    <ul>
      <li>Requisitos siempre aplicables</li>
      <ul>
        <li>5.2. Activación de características de accesibilidad.</li>
        <li>5.3. Biométrica.</li>
        <li>5.4. Preservación de la información de accesibilidad durante una conversación.</li>
        <li>5.7. Repetición de caracteres de teclado.</li>
        <li>5.8. Aceptación de pulsación doble de tecla.</li>
        <li>5.9. Acciones simultáneas del usuario.</li>
        <li>11.6.2. No alteración de características de accesibilidad</li>
        <li>11.7. Preferencias de usuario</li>
      </ul>
    </ul>

    <ul class="bloque1">
      <li>-</li>
      <ul id="q1true" class="bloque1">
        <li>5.5.2. Detectabilidad de los elementos accionables.</li>
      </ul>
    </ul>

    <ul class="bloque2">
      <li>-</li>
      <ul id="q2true" class="bloque2">
        <li>5.6.1. Estado táctil o sonoro.</li>
        <li>5.6.2. Estado visual.</li>
      </ul>
    </ul>
    
    <ul class="bloque3">
      <li>-</li>
        <li>6.1. Ancho de banda para voz (Recomendación).</li>
        <li>6.3. Identificación de llamadas.</li>
      <ul id="q31true"  class="bloque3">
        <li>Documentación, apooyo, intermediación</li>
          <li>12.1.1. Características de accesibilidad y compatibilidad.</li>
          <li>12.1.2. Documentación accesible.</li>
      </ul>
      <ul id="q32true">
        <li>6.5.2.a. Resolución.</li>
        <li>6.5.3.a. Frecuencia de imagen.</li>
      </ul>
    </ul>
    
    <ul class="bloque4">
      <li>Sistemas con capacidades de vídeo</li>
        <li>7.1.1. Reproducción del subtítulo.</li>
        <li>7.1.2. Sincronización del subtitulado.</li>
        <li>7.1.3. Preservación del subtitulado.</li>
        <li>7.2.1. Reproducción de la audiodescripción.</li>
        <li>7.2.2. Sincronización de la audiodescripción.</li>
        <li>7.2.3. Preservación de la audiodescripción.</li>
        <li>7.3. </li>
    </ul>
    
    <ul class="bloque5">
      <p>WCAG para SW de cualquier tipo:</p>
      <ul id="">
        <li>11.1.2.2.</li>
        <li>11.1.2.4.</li>
        <li>11.1.2.5.</li>
        <li>11.1.3.3.</li>
        <li>11.1.3.4.</li>
        <li>11.1.3.5.</li>
        <li>11.1.4.1.</li>
        <li>11.1.4.2.</li>
        <li>11.1.4.3.</li>
        <li>11.1.4.11.</li>
        <li>11.1.4.12.</li>
        <li>11.1.4.13.</li>
        <li>11.2.1.2.</li>
        <li>11.2.2.1.</li>
        <li>11.2.3.1.</li>
        <li>11.2.4.3.</li>
        <li>11.2.4.4.</li>
        <li>11.2.4.6.</li>
        <li>11.2.4.7.</li>
        <li>11.2.5.1.</li>
        <li>11.2.5.2.</li>
        <li>11.2.5.3.</li>
        <li>11.2.5.4.</li>
        <li>11.3.2.1.</li>
        <li>11.3.2.2.</li>
        <li>11.3.3.2.</li>
        <li>11.3.3.3.</li>
        <li>11.3.3.4.</li>
        <li>11.4.1.3.</li>
      </ul>
      <p>WCAG para SW abierto</p>
      <ul id="q51true">
        <li>11.1.1.1.1.</li>
        <li>11.1.2.1.1.</li>
        <li>11.1.2.3.1.</li>
        <li>11.1.3.1.1.</li>
        <li>11.1.3.2.1.</li>
        <li>11.1.4.4.1.</li>
        <li>11.1.4.5.1.</li>
        <li>11.1.4.10.1.</li>
        <li>11.2.1.1.1.</li>
        <li>11.2.1.4.1.</li>
        <li>11.3.1.1.1.</li>
        <li>11.3.3.1.1.</li>
        <li>11.4.1.1.1.</li>
        <li>11.4.1.2.1.</li>
      </ul>
      <p>WCAG para SW cerrado</p>
      <ul id="q52true">
        <li>11.1.1.1.2.</li>
        <li>11.1.2.1.2.1.</li>
        <li>11.1.2.1.2.2.</li>
        <li>11.1.2.3.2.</li>
        <li>11.1.4.04.2.</li>
        <li>11.1.4.05.2.</li>
        <li>11.1.4.10.2.</li>
        <li>11.2.1.1.2.</li>
        <li>11.2.1.4.2.</li>
        <li>11.3.1.1.2.</li>
        <li>11.3.3.1.2.</li>
        <li>11.4.1.1.2.</li>
        <li>11.4.1.2.2.</li>
      </ul>
    </ul>
    
    <ul class="bloque6">
        <li>Interoperabilidad con productos de apoyo  (11.5.2.3. y del 11.5.2.5 al 11.5.2.17.)</li>
    </ul>
    
    <ul class="bloque7">
      <ul id="q7true">
        <li>11.8.1. Tecnologías de gestión de contenidos.</li>
        <li>11.8.2. Creación de contenidos accesibles.</li>
        <li>11.8.3. Preservación de la información de accesibilidad.</li>
        <li>11.8.4. Servicio de reparación.</li>
        <li>11.8.5. Plantillas.</li>
      </ul>
    </ul>
    
    <ul class="bloque8">
      
      <li>Documentación, apooyo, intermediación</li>
      <li>12.1.1. Características de accesibilidad y compatibilidad.</li>
      <li>12.1.2. Documentación accesible.</li>
    </ul>
    
    <ul class="bloque9">
      <ul id="q9true">
        <li>12.2.2. Información sobre las características de accesibilidad y compatibilidad.</li>
        <li>12.2.3. Comunicación efectiva.</li>
        <li>12.2.4. Documentación accesible.</li>
      </ul>
    </ul>
  </footer>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    function checkJQuery() {
      if (typeof jQuery !== "undefined") {
        console.log("jQuery cargado correctamente. Ejecutando DataTables...");

        $(':input[value = false]').attr('checked', 'true')
        for (i=2; i<=14; i++) { $('#ques' + i ).hide(); }
        $('#ques1').show();
        $('#ques2').show();
        $('#ques3').show();
        $('#ques6').show();
        $('#ques7').show();
        $('#ques10').show();
        $('#ques11').show();
        $('#ques12').show();
        $('#ques13').show();
        $('#ques14').show();

        for (i=1; i<=9; i++) { $('.bloque' + i).hide();}

        for (i=1; i<=14; i++) {
          $('#q' + i + 'true').hide();
          $('#q' + i + 'false').hide();
        }

        $('input[type=radio]').on('change', inputChange);
      
      } else {
        console.log("jQuery aún no está cargado. Reintentando en 50ms...");
        setTimeout(checkJQuery, 50);
      }
    }   
    checkJQuery();
  });
  
  function inputChange() {
    let inputs = [''];

    for (i=1; i<=15; i++) { inputs.push( $ ('input[name=q' + i + ']:checked').attr('value')); }

    preguntasDisplay(inputs);
    respuestasDisplay(inputs);
  }

  function preguntasDisplay(inputs) {

    if (inputs[3] == 'true') {
      $('#ques4').show();
      $('#ques5').show();
    } else {
      $('#ques4').hide();
      $('#ques5').hide();
    }

    if (inputs[7] == 'true') {
      $('#ques8').show();
      $('#ques9').show();
    } else {
      $('#ques8').hide();
      $('#ques9').hide();
    }

  }

  function respuestasDisplay(inputs) {
    inputs[1] == 'true' ? $('.bloque1').show() : $('.bloque1').hide();
    inputs[2] == 'true' ? $('.bloque2').show() : $('.bloque2').hide();
    inputs[3] == 'true' ? $('.bloque3').show() : $('.bloque3').hide();
      inputs[4] == 'true' ? $('#q31true').show() : $('#q31true').hide();
      inputs[5] == 'true' ? $('#q32true').show() : $('#q32true').hide();
    inputs[6] == 'true' ? $('.bloque4').show() : $('.bloque4').hide();
    inputs[7] == 'true' ? $('.bloque5').show() : $('.bloque5').hide();
      inputs[8] == 'true' ? $('#q51true').show() : $('#q51true').hide();
      inputs[9] == 'true' ? $('#q52true').show() : $('#q52true').hide();
    inputs[10] == 'true' ? $('.bloque6').show() : $('.bloque6').hide();
    inputs[11] == 'true' ? $('.bloque7').show() : $('.bloque7').hide();
    inputs[12] == 'true' ? $('.bloque8').show() : $('.bloque8').hide();
    inputs[13] == 'true' ? $('.bloque9').show() : $('.bloque9').hide();
  }
</script>