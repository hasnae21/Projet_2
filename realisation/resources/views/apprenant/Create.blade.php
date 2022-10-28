
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
                    <p >Ajouter Apprenant</p>
                </div>
            </div>

            <form  action= "{{url('Ajouter')}}"   method="POST" class="namee">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="name" for="inputEmail4">Name Promotion :</label>
                    <input type="text" name="name" class="form-control cadre" id="inputEmail4" placeholder="name">
                  </div>
                  <div  class="form-group col-md-6 ">
                    <label class="name" for="inputPassword4">Prenom :</label>
                    <input type="text"  name="prenom" class="form-control cadre" id="inputPassword4" placeholder="Prenom">
                  </div>
                </div>
                <div class="form-group">
                  <label class="name" for="inputAddress">Email :</label>
                  <input type="text"  name="email" class="form-control cadree" id="inputAddress" placeholder="Email">
                </div>
                <input type="hidden" value="{{$id}}" name="PromotionID">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
        </div>
	</div>
</div>


</body>
</html>


