<!DOCTYPE html>
<html>

<head>
    <title> Form Pendaftaran Kuota Internet </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    section{

        width: 100%;
        min-height: 100vh;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }


    input[type="text"],
    input[type="number"], select {
        font-size: medium;
        font-family: 'Poppins', sans-serif;
    }

    p,option
     {
        font-family: 'Poppins', sans-serif;
        font-size: medium;
    }

    h3 {
        font-family: 'Poppins', sans-serif;
    }

    .container {
        width: 100%;
        min-height: 100vh;
    }


</style>

<body>
    <section style="background-image: linear-gradient(#0F2027, #203A43,#2C5364)">
        <div class="container">
            <div class="card my-auto mx-auto">
                <h5 class="pt-3 pl-3 pb-2"> Hosiana Arga Putri<br class="pb-2"> Hosi <br>5026201135 </h5>
                <h3 class="card-title mt-3 pb-4 text-center"> Form Pendaftaran Kuota Internet </h3>
                <div class="card-body pt-2 pb-2 pl-3 pr-3">
                    <form action="https://my.its.ac.id/">
                        <div class="form-group row">
                            <label class="col-sm-2" for="nama">Nama Mahasiswa :</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama" class="form-control" placeholder="Nama Mahasiswa">
                                <p id="nama-message" class="text-danger mt-1"> </p>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="nrp "> NRP Mahasiswa :</label>
                            <div class="col-sm-10">
                                <input type="number" id="nrp" class="form-control" placeholder="NRP Mahasiswa">
                                <p id="nrp-message" class="text-danger  mt-1"> </p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="jurusan "> Jurusan : </label>
                            <div class="col-sm-10">
                                <select id="jurusan" class="form-control" placeholder="Jurusan">
                                    <option value="0"></option>
                                    <option value="1"> Sistem Informasi </option>
                                    <option value="2"> Elektro </option>
                                    <option value="3"> Informatika </option>
                                </select>
                                <p id="jurusan-message" class="text-danger  mt-1"></p>
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label class="col-sm-2" for="handphone"> No Handphone : </label>
                            <div class="col-sm-10">
                                <input type="number" id="handphone" class="form-control" placeholder="No Handphone">
                                <p id="handphone-message" class="text-danger  mt-1"> </p>
                                </p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" id="kirim" class="btn btn-primary pl-5 pr-5"> Kirim </button>
                            <button type="button" id="reset" class="btn btn-success ml-3 pl-5 pr-5"> Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>


    <script>


        $("#kirim").click(function (event) {

            // Validasi nama
            var inputNama = $("#nama").val();
            var letters = /^[a-zA-Z]*$/;
            if (inputNama == "") {
                $("#nama-message").text("Nama harus diisi");
                event.preventDefault();
            }
            else if (!inputNama.match(letters) || inputNama.length < 1) {
                $("#nama-message").text("Nama harus dalam huruf dan lebih dari 1 karakter");
                event.preventDefault();
            }



            // Validasi NRP
            var inputNRP = $("#nrp").val();

            if (inputNRP == "") {
                $("#nrp-message").text("NRP harus diisi");
                event.preventDefault();
            }
            else if (inputNRP.length < 10) {
                $("#nrp-message").text("NRP harus lebih dari 10 digit");
            }

            // Validasi jurusan
            var inputJurusan = $("#jurusan").val();

            if (inputJurusan == "0") {
                $("#jurusan-message").text("Jurusan harus diisi");
                event.preventDefault();
            }


            // Validasi no handphone
            var inputHandphone = $("#handphone").val();
            if (inputHandphone == "") {
                $("#handphone-message").text("No Handphone harus diisi");
                event.preventDefault();
            }
            else if (inputHandphone.length < 10) {
                $("#handphone-message").text("No Handphone harus lebih dari 10 digit");
                event.preventDefault();
            }

        });

        $("#reset").click(function () {

            var resetForm = $(this).closest('form');

            resetForm.find("input[type=number],input[type=text], select").val("");
            $("p").hide();
        });
    </script>



</body>

</html>
