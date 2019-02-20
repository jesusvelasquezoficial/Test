<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Uphold API</title>
  </head>
  <body>
  	<!-- INPUT SEARCH OF CURRENCY OR PAIR -->
  	<section class="m-3">
  		<div class="form-inline">
		    <div class="mx-auto">
		    	<label for="currencyPair" class="sr-only">Currency or Pair</label>
			    <input type="text" class="form-control text-uppercase text-center" id="iCurrencyPair" placeholder="Currency or Pair" onkeyup="UpholdTicker($(this).val().toUpperCase());">
		    </div>
  		</div>
  	</section>
  	<!-- TABLE LIST OF CURRENCY OR PAIR -->
  	<section class="m-3">
  		<div class="table-responsive">
	  		<table class="table table-bordered table-hover table-striped text-center">
	  			<caption>List of Currency and Pair</caption>
				<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Currency</th>
					  <th scope="col" id="thPair">Pair</th>
					  <th scope="col">Compra</th>
					  <th scope="col">Venta</th>
					</tr>
				</thead>
	  		    <tbody id="contentCurrencyPair"></tbody>
	  		</table>
  		</div>
  	</section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	<!-- MY JAVASCRIPT CODE  -->
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
