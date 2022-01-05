let marka = document.getElementById('marka');
let form = document.querySelector('form');
let formHolder = document.getElementById('formHolder');
let successDialog = document.getElementById('successDialog');

form.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
    addMarka();
})

function loadMarkak () {
    fetch('server/readMarkak.php')
        .then(response => response.json())
        .then(data => render(data))
}

loadMarkak();

function render(data){
    console.log(data);
    let tableString = '';

    for(let o of data){
        tableString += `<tr><td>${o.id}</td><td>${o.nev}</td><td class="btn btn-danger" onclick="deleteMarka(${o.id}, this)">Törlés</td></tr>`;
    }

    document.querySelector('tbody').innerHTML = tableString;
}

function deleteMarka( id, item ) {
    item.parentNode.parentNode.removeChild(item.parentNode);

    fetch('server/deleteMarka.php?id='+id)
        .then(response => response.text())
        .then(data => console.log(data))
}

function addMarka() {
    console.log(marka.value);
    
    fetch('server/addMarka.php?&marka='+marka.value)
        .then(response => response.text())
        .then(data => {
            console.log(data);
            loadMarkak();
            showSuccessDialog();
            hideFormHolder();
        })

    marka.value = "";
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