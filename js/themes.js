
// variables para usar despues en el seteo de la fecha de expiracion de las cookies
var now = new Date();
var time = now.getTime();
time += 3600 * 1000;
now.setTime(time);

window.onload = function(){
  // chequea si la cookie theme esta seteada
  if (document.cookie.length != 0)
  {
    var cookiesArray = document.cookie.split("; ");
    for (var i = 0; i < cookiesArray.length; i++)
    {
      var nameValueArray = cookiesArray[i].split("=");
      if (nameValueArray[0] == "theme")
      {
        if (nameValueArray[1] == "navidad")
        {
          document.getElementById('theme').href = 'css/navidad/stylesnavidad.css';
        }
      }
    }
  }
}


document.getElementById('buttonnavidad').addEventListener('click', function () {
  document.getElementById('theme').href = 'css/navidad/stylesnavidad.css';
  document.cookie = 'theme=navidad; expires=' + now.toUTCString() + ";"

  });
document.getElementById('buttonclassic').addEventListener('click', function () {
  document.getElementById('theme').href = 'css/styles.css';
  document.cookie = 'theme=classic; expires=' + now.toUTCString() + ";"
});
// // document.getElementsByClassName('themechange')
//
// let darkThemeEnabled = document.nav.backgroundcolor.toggle('dark-theme');
// localStorage.setItem('dark-theme-enabled', darkThemeEnabled);
//
// if (JSON.parse(localStorage.getItem('dark-theme-enabled'))) {
//   document.body.classList.add('dark-theme');
// }
// document.getElementById('buttonID').onclick = function () {
//     document.getElementById('theme_css').href = '../red.css';
// };
