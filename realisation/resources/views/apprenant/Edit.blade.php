
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
            @foreach ($apprenant as $value)
            <form  action="{{url('Modifier')}}/{{$value->id}}"  method="POST" class="namee">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="name" for="inputEmail4">Name Promotion :</label>
                    <input type="text" name="name" value="{{$value->Name_apprenant}}" class="form-control cadre" id="inputEmail4" placeholder="name">
                  </div>
                  <div  class="form-group col-md-6 ">
                    <label class="name" for="inputPassword4">Prenom :</label>
                    <input type="text"  value="{{$value->Prenom_apprenant}}" name="prenom" class="form-control cadre" id="inputPassword4" placeholder="Prenom">
                  </div>
                </div>
                <div class="form-group">
                  <label class="name" for="inputAddress">Email :</label>
                  <input type="text"  name="email" value="{{$value->Email_apprenant}}" class="form-control cadree" id="inputAddress" placeholder="Email">
                </div>
                <input type="hidden" value="{{$value->PromotionID}}" name="PromotionID">
                <button type="submit" class="btn btn-primary">Modifier</button>
              </form>
              @endforeach

        </div>
	</div>
</div>


</body>
</html>


