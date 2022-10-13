let temasList = temas['tema'];

const nameDisplay = 'Melanie Caballero';
const date = new Date();
const year = date.getFullYear();

function init() {
  addLogo();
  document.getElementById('logoImg').addEventListener('error', logoAlternative);
  createMenu();
  $('#content').load('assets/intro/introduccion.html');
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
  let menu = document.getElementById('menu');

  temasList.forEach((item, index ) => {
    let li = document.createElement('li');
    li.className='nav-item dropdown';

    let a = document.createElement('a');
    let txt = document.createTextNode(item.tituloTema);
    a.append(txt);
    a.setAttribute('class', 'nav-link dropdown-toggle text-light');
    a.setAttribute('href', '#');
    a.setAttribute('role', 'button');
    a.setAttribute('data-bs-toggle', 'dropdown');
    a.setAttribute('aria-expanded', 'false');

    li.appendChild(a)

    let ul = document.createElement('ul');
    ul.className='dropdown-menu';

    item.subtema.forEach(item2 => {
      let li2 = document.createElement('li');

      let a2 = document.createElement('a');
      let txt2 = document.createTextNode(item2.tituloSubtema);
      a2.append(txt2);
      a2.setAttribute('class', 'dropdown-item');
      a2.setAttribute('data-url', item2.url);

      li2.appendChild(a2);
      ul.appendChild(li2);
    })
    // Añadir
    li.appendChild(ul);
    menu.appendChild(li);

  });
  $('.dropdown-item').on('click', function(event) {
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