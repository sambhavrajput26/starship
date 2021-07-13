<link href="/Css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<div class="title animated fadeInDown" id="title">
     DETAILS 
</div>

<div class="container2">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Image</th>
		      <th scope="col">Model</th>
		      <th scope="col">Manufacturer</th>
		      <th scope="col">Crew Size</th>
		      <th scope="col">Cost</th>
		      <th scope="col">Starship Class</th>
		      <th scope="col">Capacity</th>
		      <th scope="col">Atmospheric Speed</th>
		      <th scope="col">MGLT</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">{{ $results->name }}</th>
		      <td class="w-25">
			      <img src="{{ $results->image }}" class="img-fluid img-thumbnail" alt="Sheep">
		      </td>
		      <td>{{ $results->model }}</td>
		      <td>{{ $results->manufacturer }}</td>
		      <td>{{ $results->crew_size }}</td>
		      <td>{{ $results->cost }}</td>
		      <td>{{ $results->starship_class }}</td>
		      <td>{{ $results->cargo_capacity }}</td>
		      <td>{{ $results->max_atmosphering_speed }}</td>
		      <td>{{ $results->MGLT }}</td>
		    </tr>
		  </tbody>
		</table>   

		<a href="/starships"><< Go Back</a>
    </div>
  </div>
</div>