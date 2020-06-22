<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imaginator 3000</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .lightbox-img{width:100%;height:100%;object-fit:cover;cursor:pointer;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5">Teste de Fancybox/Lightbox</h1>
            </div>
            <div class="col-6 col-md-3"><img class="lightbox-img img-fluid" src="assets/img/teste1.jpg"></div>
            <div class="col-6 col-md-3"><img class="lightbox-img img-fluid" src="assets/img/teste2.jpg"></div>
            <div class="col-6 col-md-3"><img class="lightbox-img img-fluid" src="assets/img/teste3.jpg"></div>
            <div class="col-6 col-md-3"><img class="lightbox-img img-fluid" src="assets/img/teste4.jpg"></div>
        </div>
    </div>
    <div id="lightbox" class="d-none justify-content-center fixed-top vh-100 vw-100">
        <div class="overlay w-100 h-100" style="position: absolute;top: 0;left: 0;background: #000a;z-index: 1;"></div>
        <div class="position-relative text-right m-5 w-50" style="z-index: 2;">
            <img class="img-fluid mh-100 bg-white p-2" alt="Lightbox Image">
            <img class="position-absolute" style="top: -10px;right: -10px;cursor: pointer;border-radius: 100%;" src="assets/img/close.png" title="lightbox close" alt="lightbox close">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('#lightbox .overlay, #lightbox img:nth-child(2)').click(function () { $('#lightbox').removeClass('d-flex'); });
            $('.lightbox-img').click(function () {
            $('#lightbox').addClass('d-flex');
            $('#lightbox img:first-child').attr('src', $(this).attr('src'));
        });
    </script>
</body>
</html>