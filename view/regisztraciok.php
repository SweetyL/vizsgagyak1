<div class="container">
    <h1 class="text-center">Futóverseny jelentkezési lap</h1>
    <div class="container border col-lg-3">
        <form action="index.php?page=regisztraciok" method="post">
            <legend>Adatok</legend>
            <label for="nev">Név:</label>
            <input type="text" id="nev" name="nev" class="form-control" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            <label for="nev">Születési idő:</label>
            <input type="date" id="szulido" name="szulido" class="form-control" required>
            <p>Nem:</p>
            <input type="radio" name="nem" value="F">Férfi
            <br>
            <input type="radio" name="nem" value="N">Nő
            <br>
            <button type="submit" class="btn btn-info">Küldés</button>
        </form>
    </div>
    <div class="container col-lg-4">
        <h2>Fontos</h2>
    </div>
    <div class="container col-lg-3">
        <div>
        <p>Start</p>
        <p>17:00</p>
        </div>
    </div>
</div>