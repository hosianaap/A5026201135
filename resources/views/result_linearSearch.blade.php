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
        padding-top: 200px;
        padding-bottom: 100px;
    }


    h2,
    p {
        font-family: 'Poppins', sans-serif;
    }

    .row {
        text-align :left;
    }
</style>

<body>
    <section class="min-vh-100" style="background: linear-gradient(to right,#000428,#5e5e5e)">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body pt-4 pb-4 pl-4 pr-4 text-center">
                            <h2 class="mb-3"> Linear Search Result </h2>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-5">
                                   <p> Number
                                </div>
                                <div class="col-1">
                                    <p> :
                                </div>
                                <div class="col-5">
                                    <p> <?php
                                    if(isset( $_POST['no'])) {
                                        $numberSearch = $_POST['no'];
                                        echo $numberSearch; } ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5">
                                   <p> Result
                                </div>
                                <div class="col-1">
                                    <p> :
                                </div>
                                <div class="col-5">
                                    <p>
                                        <?php
                                            if(isset( $_POST['no'] ) ){
                                                $anArray = array(100, 44, 2, 80, 5, 13, 11, 4, 120);

                                                function linearSearch($anArray, $element) {
                                                    for ($i = 0; $i < sizeof($anArray); $i++) {
                                                        if ($anArray[$i] == $element) {
                                                                return $i;
                                                        }
                                                    }
                                                        return -1;
                                                };

                                                $output = linearSearch($anArray, $numberSearch);

                                                if($output != -1) {
                                                    echo " is found in index ", $output;
                                                }
                                                else {
                                                    echo  " is not found";
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
