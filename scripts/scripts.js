let temasList = temas['tema'];

const nameDisplay = 'Melanie Caballero';
const date = new Date();
const year = date.getFullYear();

function init() {
  addLogo();
  document.getElementById('logoImg').addEventListener('error', logoAlternative);
  createMenu();
  createFooterText();
}

function addLogo() {
  let img = document.createElement('img');
  img.setAttribute('id', 'logoImg')
  img.setAttribute('src', 'img/logo.png')

  let logo = document.getElementById('logo');
  logo.append(img);
}

function logoAlternative() {
  let logo = document.getElementById('logo');
  let img = document.getElementById('logoImg');
  logo.removeChild(img);

  let p = document.createElement('p');
  let txt = document.createTextNode(nameDisplay);
  p.append(txt);
  logo.append(p);
}

function createMenu() {
  let menuLateral = document.getElementById('menuLateral');

  temasList.forEach((item, index ) => {
    let accordionItem = document.createElement('div');
    accordionItem.className='accordion-item';

    // Cabecera acordeón
    let accordionHeader = document.createElement('div');
    accordionHeader.setAttribute('id', 'heading'+index)
    accordionHeader.className= 'accordion-header';

    // botón cabecera
    let btn = document.createElement('button');
    let txt = document.createTextNode(item.tituloTema);
    btn.append(txt);
    btn.className = 'accordion-button';
    btn.setAttribute('type', 'button');
    btn.setAttribute('data-bs-toggle', 'collapse');
    btn.setAttribute('data-bs-target', '#collapse'+index);
    btn.setAttribute('aria-expanded', 'true');
    btn.setAttribute('aria-controls', 'collapse'+index);

    accordionHeader.appendChild(btn)

    // Cuerpo acordón
    let collapse = document.createElement('div');
    collapse.setAttribute('id', 'collapse'+index);
    collapse.className= 'accordion-collapse collapse btn-group-vertical';
    collapse.setAttribute('aria-labelledby', 'heading'+index);
    collapse.setAttribute('data-bs-parent', '#menuLateral');
    collapse.setAttribute('role', 'group');

    item.subtema.forEach(item2 => {
      // Subtemas
      let accordionBody = document.createElement('div');
      accordionBody.className= 'accordion-body';

      let a = document.createElement('a');
      let txt2 = document.createTextNode(item2.tituloSubtema);
      a.append(txt2);
      a.classList.add('btnTema');
      a.setAttribute('data-url', item2.url);
      accordionBody.appendChild(a);
      collapse.appendChild(accordionBody);
    })
    // Añadir
    accordionItem.appendChild(accordionHeader);
    accordionItem.appendChild(collapse);
    menuLateral.appendChild(accordionItem);
    document.getElementById('collapse0').classList.add('show')

  });
  $('.btnTema').on('click', function(event) {
    event.preventDefault();
    $.get({
        url: $(this).attr('data-url'),
        success: function(data) {
            $('#content').html(data);
        },
        error: function() {
            $('#content').html('Error al cargar el contenido');
        }
    })
  });
}

function createFooterText() {
  let p = document.createElement('p');
  let txt = document.createTextNode(nameDisplay + ' - ' + year);
  p.append(txt);
  let footer = document.getElementById('footer');
  footer.append(p);
}
init();