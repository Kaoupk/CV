function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function showTitle(event) {

  var x = document.getElementById("competences");
  x.classList.add ("hidden");
  var x = document.getElementById("menucompetences");
  x.classList.remove ("active");

  var x = document.getElementById("experiences");
  x.classList.add ("hidden");
  var x = document.getElementById("menuexperiences");
  x.classList.remove ("active");

  var x = document.getElementById("formations");
  x.classList.add ("hidden");
  var x = document.getElementById("menuformations");
  x.classList.remove ("active");

  var x = document.getElementById("informations");
  x.classList.add ("hidden");
  var x = document.getElementById("menuinformations");
  x.classList.remove ("active");

  var x = document.getElementById("coord");
  x.classList.add ("hidden");
  var x = document.getElementById("menucoord");
  x.classList.remove ("active");

  var x = document.getElementById("Bienvenue");
  x.classList.add ("hidden");

  var x = event.target;
  x.classList.add ("active");
  var name = x.id.substring(4);
  console.log(x);
  var y = document.getElementById(name);
  y.classList.remove ("hidden");
  console.log(y);

}

function showCompetences() {
    var x = document.getElementById("competences");
    x.classList.remove ("hidden");
    var x = document.getElementById("menucompetences");
    x.classList.add ("active");

    var x = document.getElementById("experiences");
    x.classList.add ("hidden");
    var x = document.getElementById("menuexperiences");
    x.classList.remove ("active");

    var x = document.getElementById("formations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuformations");
    x.classList.remove ("active");

    var x = document.getElementById("informations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuinformations");
    x.classList.remove ("active");

    var x = document.getElementById("coord");
    x.classList.add ("hidden");
    var x = document.getElementById("menucoord");
    x.classList.remove ("active");

    var x = document.getElementById("Bienvenue");
    x.classList.add ("hidden");
}

function showExperiences() {
    var x = document.getElementById("competences");
    x.classList.add ("hidden");
    var x = document.getElementById("menucompetences");
    x.classList.remove ("active");

    var x = document.getElementById("experiences");
    x.classList.remove ("hidden");
    var x = document.getElementById("menuexperiences");
    x.classList.add ("active");

    var x = document.getElementById("formations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuformations");
    x.classList.remove ("active");

    var x = document.getElementById("informations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuinformations");
    x.classList.remove ("active");

    var x = document.getElementById("coord");
    x.classList.add ("hidden");
    var x = document.getElementById("menucoord");
    x.classList.remove ("active");

    var x = document.getElementById("Bienvenue");
    x.classList.add ("hidden");
}

function showFormations() {
    var x = document.getElementById("competences");
    x.classList.add ("hidden");
    var x = document.getElementById("menucompetences");
    x.classList.remove ("active");

    var x = document.getElementById("experiences");
    x.classList.add ("hidden");
    var x = document.getElementById("menuexperiences");
    x.classList.remove ("active");

    var x = document.getElementById("formations");
    x.classList.remove ("hidden");
    var x = document.getElementById("menuformations");
    x.classList.add ("active");

    var x = document.getElementById("informations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuinformations");
    x.classList.remove ("active");

    var x = document.getElementById("coord");
    x.classList.add ("hidden");
    var x = document.getElementById("menucoord");
    x.classList.remove ("active");

    var x = document.getElementById("Bienvenue");
    x.classList.add ("hidden");
}

function showInformations() {
    var x = document.getElementById("competences");
    x.classList.add ("hidden");
    var x = document.getElementById("menucompetences");
    x.classList.remove ("active");

    var x = document.getElementById("experiences");
    x.classList.add ("hidden");
    var x = document.getElementById("menuexperiences");
    x.classList.remove ("active");

    var x = document.getElementById("formations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuformations");
    x.classList.remove ("active");

    var x = document.getElementById("informations");
    x.classList.remove ("hidden");
    var x = document.getElementById("menuinformations");
    x.classList.add ("active");

    var x = document.getElementById("coord");
    x.classList.add ("hidden");
    var x = document.getElementById("menucoord");
    x.classList.remove ("active");

    var x = document.getElementById("Bienvenue");
    x.classList.add ("hidden");
}

function showCoord() {
    var x = document.getElementById("competences");
    x.classList.add ("hidden");
    var x = document.getElementById("menucompetences");
    x.classList.remove ("active");

    var x = document.getElementById("experiences");
    x.classList.add ("hidden");
    var x = document.getElementById("menuexperiences");
    x.classList.remove ("active");

    var x = document.getElementById("formations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuformations");
    x.classList.remove ("active");

    var x = document.getElementById("informations");
    x.classList.add ("hidden");
    var x = document.getElementById("menuinformations");
    x.classList.remove ("active");

    var x = document.getElementById("coord");
    x.classList.remove ("hidden");
    var x = document.getElementById("menucoord");
    x.classList.add ("active");

    var x = document.getElementById("Bienvenue");
    x.classList.add ("hidden");
}

function effacer()
{
  document.getElementById('nom').setAttribute("value", '');
  document.getElementById('date').setAttribute("value", '');
  document.getElementById('adresse').setAttribute("value", '');
  document.getElementById('tel').setAttribute("value", '');
  document.getElementById('textadresse').innerHTML='';
}
