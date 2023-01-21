<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO TITLE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <main class="container-sm text-center">
        <form>

            <h1 class="h1 p-3 mb-3 fw-normal">QUESTION</h1>

            <p class="fs-2 text-muted">The Theory of Relativity is the product of which of the following scientists?</p>

            <p class="fs-6 text-muted">A- Isaac Newton</p>
            <p class="fs-6 text-muted">B- Albert Einstein</p>
            <p class="fs-6 text-muted">C- Stephen Hawking</p>
            <p class="fs-6 text-muted">D -Marie Curie</p>
            

            <div class="container-fluid">

                <div class="container-sm">
                    <div class="row g-2">

                        <div class="col-3">
                            <div class="p-3 border bg-light">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio1">LETER A</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-3 border bg-light">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">LETER B</label>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="p-3 border bg-light">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">LETER C</label>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="p-3 border bg-light">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio4">LETER D</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="p-2 m-3 w-10 btn btn-sm btn-primary" type="submit">CONFIRM</button>

        </form>
        <div class="btn-group" role="group" aria-label="First group">
            <button type="button" class="btn btn-outline-secondary">1</button>
            <button type="button" class="btn btn-outline-secondary">2</button>
            <button type="button" class="btn btn-outline-secondary">3</button>
            <button type="button" class="btn btn-outline-secondary">4</button>
            <button type="button" class="btn btn-outline-secondary">5</button>
        </div>
    </main>
</body>

</html>