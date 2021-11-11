<!DOCTYPE html>
<html>

<title> Linear Search - Hosiana Arga Putri </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .container {
        padding-top: 150px;
        padding-bottom: 90px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    input[type="number"], button{
        font-size: medium;
        font-family: 'Poppins', sans-serif;
    }

    h2,
    h5,
    p {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
    <section class="min-vh-100" style="background: linear-gradient(to right,#000428,#5e5e5e)">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body pt-4 pb-4 pl-3 pr-3 text-center">
                            <h2 class="mb-3"> Linear Search </h2>
                            <p> Given the array : </p>
                            <p class="mb-4"> [100, 44, 2, 80, 5, 13, 11, 4, 120] </p>
                            <form method="post" action="hasilLinearSearch" auto_complete="off">
                                @csrf
                                <div class="mb-4">
                                    <input type="number" id="no" name="no" class="form-control form-control-lg"
                                        placeholder="Search number's index in the given array" required oninvalid="this.setCustomValidity('Please enter a number')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit" id="search"
                                    name="search">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
