function cardStyleChange(type) {
    console.log(type);
    // url = url + type;

    GetInfoFromDatabase("php/php_include_files/card.php?" + type, showData);
}

function showData(data) {
    //console.log(data.responseText);
    var div = document.getElementById('cards');
    div.innerHTML = data.responseText;
  } 


function GetInfoFromDatabase(url, outputData) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      outputData(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

