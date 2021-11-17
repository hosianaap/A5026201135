<!DOCTYPE html>
<html lang="en">

<head>
    <title> Add Method jQuery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    .container {
        padding-top: 150px;
        padding-bottom: 100px;
    }

    h1,
    h3 {
        margin-top: 20px;
        color: white;
    }
</style>

<body>

    <section class="min-vh-100" style="background: linear-gradient(to right,#000428,#5e5e5e)">
        <div class="container text-center">
            <h1> Add the name! </h1>
            <h3> Addie </h3>
            <form class="form-inline d-flex justify-content-center mt-4 mb-3">
                <div class="form-group mx-2">
                    <input class="form-control" type="text" name="firstName" id="firstName"
                        placeholder="Add First Name">
                </div>
                <button class="btn btn-primary" type="submit" id="firstNameButton"> Add </button>
            </form>


            <form class="form-inline d-flex justify-content-center mt-2">
                <div class="form-group mx-2">
                    <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Add Last Name">
                </div>
                <button class="btn btn-primary" type="submit" id="lastNameButton"> Add </button>
            </form>
        </div>
    </section>


    <script>
        $("#lastNameButton").click(function (e) {
            var last = $("#lastName").val();
            $("h3").append(last);
            e.preventDefault();
        });

        $("#firstNameButton").click(function (e) {
            var first = $("#firstName").val();
            $("h3").prepend(first);
            e.preventDefault();
        });
    </script>
</body>
