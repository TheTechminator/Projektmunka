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

<h1 class="text-center">Márkák</h1>
<button type="button" class="btn btn-primary" onclick="showFormHolder();">Új márka hozzáadása</button>
<div class="tbl">
    <table class="table table-striped">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Név</th>
            <th>Művelet</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
<div id="formHolder">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="marka">Márka</label>
                <input type="text" class="form-control" id="marka" aria-describedby="markaHelp" required>
                <small id="markaHelp" class="form-text text-muted">Adja meg a márka nevét.</small>
            </div>

            <button type="submit" class="btn btn-primary">Hozzáadás</button>
            <button type="button" class="btn btn-primary" onclick="hideFormHolder();">Mégsem</button>
        </form>
    </div>
</div>
<script src="client/js/markak.js"></script>