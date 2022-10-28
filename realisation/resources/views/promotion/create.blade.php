
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.heade')
</head>
<body id="bod">
<header class="header">
    @include('layouts.header')

</header>



<div class="container-xl tableBody ">
    @include('layouts.navbar')





	<div class="table-responsive">
		<div class="table-wrapper">
            <div class="table-title">
                <div class="row in" >
                    <p >Ajouter Promotion</p>
                </div>
            </div>

            <form action="ajouter"  method="POST">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="name" for="inputEmail4">Name Promotion :</label>
                    <input type="text" name="name" class="form-control cadre" id="inputEmail4" placeholder="name">
                  </div>

                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
        </div>
	</div>
</div>


</body>
</html>


