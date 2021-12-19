
function question() {
  prompt("As-tu une question ?")
}

function printPage() {
  print(document)
}

function f() {
 
  let texte = document.createTextNode('Nouveau texte !!!');
  document.body.append(texte);
  alert("Ajout d'un texte");
}