
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.heade')


</head>
<body id="bod">
<header class="header">
@include('layouts.header')

</header>
@include('layouts.navbar')




<div class="container-xl tableBody tableEdit">
	<div class="table-responsive tableRes">
        <div class="table-wrapper">

            @foreach ($promotion as $value)
            <form action="{{url('modifier')}}/{{$value->id_promotion}}"  method="POST">
            @csrf

			<div class="table-title">
				<div class="row">
					<div class="col">

                        <div class="search-box">
                            <h2 class="text title"  onclick="change()"> {{$value->Name_promotion}}</h2>
                            <input type="hidden"  class="form-control inputHidden Input" value="{{$value->Name_promotion}}" name="name" placeholder="Modifier&hellip;">
                        </div>

					</div>
					<div class="col-sm-6">
						<button  class="btn btn-warning" > <span>modifier Promotion</span></button>
					</div>
				</div>
			</div>
           </form>

			<div class="table-titlee">
        <div class="row">
          <div class="col-sm-6">
            <a href="{{url('Create')}}/{{$value->id_promotion}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Ajouter Apprenant</span></a>
          </div>
          <div class="col">
              {{-- search  --}}
              <div class="search-box">
                  <input type="hidden" value="{{$value->id_promotion}}" id="IdKey"   class="form-control  searchInput" >
                  <input type="text" id="search" class="form-control searchEdit searchInput" placeholder="Search&hellip;">
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <table class="table table-striped table-hover">
        <thead>
					<tr>
						<th>

						</th>
						<th>Id</th>
						<th>Name </th>
						<th>Prenom</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
                    @foreach ($apprenant as $value)

					<tr>
						<td>

						</td>
                        <td>{{$value->id}}</td>
                        <td>{{$value->Name_apprenant}}</td>
                        <td>{{$value->Prenom_apprenant}}</td>
                        <td>{{$value->Email_apprenant}}</td>
						<td>
							<a href="{{url('Edit')}}/{{$value->id}}" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
							<a href="{{url('Suprimer')}}/{{$value->id}}" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    @endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>


</body>
</html>


<script>
    let text = document.querySelector('.title');
    let input = document.querySelector('.inputHidden');

    function change(){
        text.style.display = "none"
        input.setAttribute("type", "text");

    }
 </script>

        <script src="{{asset('js/searchAP.js')}}"></script>
