function showHi() {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.status == 200 && xmlHttp.readyState == '4') {
            alert('yes');
            document.getElementById('myP').innerHTML = xmlHttp.responseText;
        }
    }
    xmlHttp.open('GET', 'ajax.php', true);
    xmlHttp.send();
}