function showName(str) {
    if (str.length == 0) {
        document.getElementById('match').innerHTML = '';
        return;
    }
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {

        if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
            document.getElementById('match').innerHTML = xmlHttp.responseText;
        }
    }
    xmlHttp.open('GET', 'ajax.php?name=' + str, true);
    xmlHttp.send();
}

