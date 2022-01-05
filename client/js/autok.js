let tbody = document.querySelector('tbody');
let nev = document.getElementById('nev');
let marka = document.getElementById('marka');
let evjarat = document.getElementById('evjarat');
let form = document.querySelector('form');
let formHolder = document.getElementById('formHolder');
let successDialog = document.getElementById('successDialog');

form.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
    addAuto();
})

function loadAutok () {
    fetch('server/readAutok.php')
        .then(response => response.json())
        .then(data => render(data))
}

loadAutok();

function render(data){
    console.log(data);
    let tableString = '';

    for(let o of data){
        tableString += `
        <tr>
            <td>${o.id}</td>
            <td contenteditable="true">${o.nev}</td>
            <td>${o.marka}</td>
            <td>${o.evjarat}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick="deleteAuto(${o.id}, this);">Törlés</button>
                <button type="button" class="btn btn-success" onclick="updateAuto(${o.id}, this);">Módosít</button>
            </td>
        </tr>`;
    }

    tbody.innerHTML = tableString;
}

fetch('server/readMarkak.php')
    .then(response => response.json())
    .then(data => loadMarkak(data))

function loadMarkak (data) {
    marka.innerHTML = data.map((o) => `<option value="${o.id}">${o.nev}</option>`).join('');
}   

function deleteAuto( id, item ) {
    item.parentNode.parentNode.parentNode.removeChild(item.parentNode.parentNode);

    fetch('server/deleteAuto.php?id='+id)
        .then(response => response.text())
        .then(data => console.log(data))
}

function updateAuto( id, item ) {
    console.log(item.parentNode.parentNode.childNodes[3].innerHTML);
    let ujNev = item.parentNode.parentNode.childNodes[3].innerHTML;

    fetch('server/updateAuto.php?id='+id+'&nev='+ujNev)
        .then(response => response.text())
        .then(data => {
            console.log(data);
            loadAutok();
        })
}

function addAuto() {
    console.log(nev.value);
    console.log(marka.value);
    console.log(evjarat.value);
    
    fetch('server/addAuto.php?nev='+nev.value+"&marka="+marka.value+"&evjarat="+evjarat.value)
        .then(response => response.text())
        .then(data => {
            console.log(data);
            loadAutok();
            showSuccessDialog();
            hideFormHolder();
        })

    nev.value = "";
    evjarat.value = "";
}

function hideFormHolder () {
    formHolder.style.display = "none";
}

function showFormHolder () {
    formHolder.style.display = "flex";
}

function showSuccessDialog () {
    successDialog.style.display = "flex";

    setTimeout(() => {
        successDialog.style.display = "none";
    }, 1000);
}