<style>
    h1 {
        text-align: center;
    }

    .row {
        display: flex;
        justify-content: center;
    }

    .col {
        flex-basis: 33.33%;
        text-align: center;
        padding: 20px;
    }

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        border: none;
    }

    .card img {
        width: 80%;
        height: auto;
        margin: 0 auto 10px;
        display: block;

    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 16px;
    }
</style>
<h1>About Us</h1>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <img src="images/pp.jpg" class="card-img-top" alt="Person 1">
            <div class="card-body">
                <h5 class="card-title">KENY MIHEWU</h5>
                <p class="card-text">NIM: C2057201030</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="images/pp.jpg" class="card-img-top" alt="Person 2">
            <div class="card-body">
                <h5 class="card-title">FRISKILA PEBRIOLA</h5>
                <p class="card-text">NIM: C2057201005</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
</div>