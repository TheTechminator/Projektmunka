<h1 class="text-center">Autók</h1>
<button type="button" class="btn btn-primary" onclick="showFormHolder();">Új autó hozzáadása</button>
<div class="tbl">
    <table class="table table-striped">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Név</th>
            <th>Márka</th>
            <th>Évjárat</th>
            <th>Művelet</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>

<style>
    #formHolder {
        position: fixed;
        z-index: 10;
        background-color: white;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        display: none/*flex*/;
        align-items: center;
    }
</style>

<div id="successDialog" style="
    display: none/*flex*/;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #8effb6;
    justify-content: center;
    text-transform: uppercase;
    z-index: 9999;
">
    Sikeresen hozzáadva
</div>

<div id="formHolder">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nev">Név</label>
                <input type="text" class="form-control" id="nev" aria-describedby="nevHelp" required>
                <small id="nevHelp" class="form-text text-muted">Adja meg az autó nevét.</small>
            </div>

            <div class="form-group">
                <label for="marka">Márka</label>
                <select class="form-control" id="marka" aria-describedby="markaHelp" required>
                </select>
                <small id="markaHelp" class="form-text text-muted">Válassza ki az autó márkáját. Ha nincs ilyen márka adjon hozzá egy újat.</small>
            </div>

            <div class="form-group">
                <label for="evjarat">Évjárat</label>
                <input type="number" class="form-control" id="evjarat" aria-describedby="evjaratHelp" required>
                <small id="evjaratHelp" class="form-text text-muted">Adja meg az autó évjáratát.</small>
            </div>
            <button type="submit" class="btn btn-primary">Hozzáadás</button>
            <button type="button" class="btn btn-primary" onclick="hideFormHolder();">Mégsem</button>
        </form>
    </div>
</div>

<script src="client/js/autok.js"></script>