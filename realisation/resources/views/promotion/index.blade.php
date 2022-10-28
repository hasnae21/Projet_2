
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
                <div class="row">
                    <div class="col">
                                <div class="search-box">
                                    {{-- <i class="material-icons">&#xE8B6;</i> --}}
                                    <input type="text" id="search" class="form-control  searchInput" placeholder="Search&hellip;">
                                </div>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{asset('create')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Ajouter Promotion</span></a>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name promotion</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($promotion as $value)
                    <tr>

                        <td>{{$value->id_promotion}}</td>
                        <td>{{$value->Name_promotion}}</td>

                        <td>
                            <a href="edit/{{$value->id_promotion}}" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                            <a href="suprimer/{{$value->id_promotion}}" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
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


<script src="{{asset("js/search.js")}}"></script>
