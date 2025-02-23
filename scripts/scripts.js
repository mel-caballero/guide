let temasList = temas['tema'];

const nameDisplay = 'Melanie Caballero';
const date = new Date();
const year = date.getFullYear();

$(document).ready(function() {
  createMenu();
  //createFooterText();
  let param = new URLSearchParams(window.location.search).get('param');
  refreshContent(param);
});

window.onpopstate = function(event) {
  let param = new URLSearchParams(window.location.search).get('param');
  window.history.pushState('', '', '?param=' + param);
  refreshContent();
};

function refreshContent(param) {
  if (param) {
    temasList.forEach(tema => {
      tema.subtema.forEach(subtema => {
        if (subtema.nombre == param) {
          $('#content').load(subtema.ruta + subtema.nombre + '.html');
        } else {
          $('#content').html('Contenido no disponible');
        }
      })
    })
  } else {
    $('#content').load('assets/intro/bienvenida.html');
  }
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

  temasList.forEach((tema) => {
    let liTemas = document.createElement('li');
    liTemas.className='nav-item dropdown';

    let a = document.createElement('a');
    let txtTema = document.createTextNode(tema.tituloTema);
    a.append(txtTema);
    a.setAttribute('class', 'nav-link dropdown-toggle text-light');
    a.setAttribute('href', '#');
    a.setAttribute('role', 'button');
    a.setAttribute('data-bs-toggle', 'dropdown');
    a.setAttribute('aria-expanded', 'false');

    liTemas.appendChild(a)

    let ul = document.createElement('ul');
    ul.className='dropdown-menu';

    tema.subtema.forEach(subtema => {
      let liSub = document.createElement('li');

      let aSub = document.createElement('a');
      let txtSub = document.createTextNode(subtema.tituloSubtema);
      aSub.append(txtSub);
      aSub.setAttribute('class', 'dropdown-item');
      aSub.setAttribute('href', subtema.ruta + subtema.nombre + '.html');
      aSub.setAttribute('data-href', subtema.nombre);

      liSub.appendChild(aSub);
      ul.appendChild(liSub);
    })
    liTemas.appendChild(ul);
    menu.appendChild(liTemas);

  });
  $('.dropdown-item').on('click', updateContent);
}

function updateContent(event) {
  event.preventDefault();
  let parent = $(this).parents('.dropdown').children('.dropdown-toggle');
  $.get({
      url: $(this).attr('href'),
      success: function(data) {
          window.history.pushState('', '', '?param=' + event.target.attributes['data-href'].value);
          $(document).attr("title", event.target.innerHTML)
          $('#content').html(data);
      },
      error: function() {
          $('#content').html('Error al cargar el contenido');
      },
      complete: function() {
          parent.focus();         
      }
  })
}

function createFooterText() {
  let p = document.createElement('p');
  let txt = document.createTextNode(nameDisplay + ' - ' + year);
  p.append(txt);
  let footer = document.getElementById('footer');
  footer.append(p);
}