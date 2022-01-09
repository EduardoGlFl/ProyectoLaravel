<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Detalles Compra</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-size: 17px;

        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;

        }

        h5 {
            font-style: italic;

        }

        h1 {
            font-weight: 100;
            font-style: oblique;
            font-size: 20px;
        }

        .container {
            width: 70%;
            margin: 0 auto;
            height: auto;
        }
    </style>
</head>

<body>
    <br>
    <br>

    <div class="container">

        <section class="heading">
            <h5>Detalles de compra ID: {{$getspecificdetailid['id']}}</h5>







            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Info Participante
                </a>
                <a href="#" class="list-group-item list-group-item-action">Nombre del participante:</a>
                <a class="list-group-item list-group-item-action disabled">{{$purchaseDetails['nombres']}} {{$purchaseDetails['apellidoMaterno']}} {{$purchaseDetails['apellidoPaterno']}}</a>
                <a href="#" class="list-group-item list-group-item-action">Email:</a>
                <a class="list-group-item list-group-item-action disabled">{{$purchaseDetails['email']}}</a>
                <a href="#" class="list-group-item list-group-item-action">Telefono:</a>
                <a class="list-group-item list-group-item-action disabled">{{$purchaseDetails['telefono']}}</a>


            </div>
            <br>
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Info Boleto:  {{$purchaseDetails['tickets_id']}}
                </button>
            </div>            

            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Descripción </div>
                        @foreach ($sections as $sec)
                        <!-- @if($sec['id'] == $purchaseDetails['section_id']) -->

                        {{$sec['id'] == $purchaseDetails['section_id']}}
                        <!-- @endif -->
                        @endforeach
                    </div>

                    <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Precio</div>
                        Content for list item
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>

            </ol>
          

         





        </section>
<br>

        <section class="education">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Info Compra
                </button>
            </div>




            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Total</div>

                    </div>
                    <span class="badge bg-primary rounded-pill">$ {{$purchaseDetails['total']}} M</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">IVA</div>

                    </div>
                    <span class="badge bg-primary rounded-pill">$ {{$purchaseDetails['iva']}} MX</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Importe</div>
                        Content for list item
                    </div>
                    <span class="badge bg-primary rounded-pill">$ {{$purchaseDetails['importe']}} MX</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Subtotal</div>
                        Content for list item
                    </div>
                    <span class="badge bg-primary rounded-pill">$ {{$purchaseDetails['subtotal']}} MXX</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"></div>
                        Status de pago
                    </div>
                    @if($purchaseDetails['pagado'] == 1)
                  
                    <span class="badge bg-success rounded-pill"> Pagado</span>
                    @else
                    <span class="badge bg-danger rounded-pill"> No pagado</span>
                    @endif
                </li>
            </ol>
            <br>






        </section>











    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>