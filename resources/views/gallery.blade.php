@extends('layouts.app')

@section('content')
   <div class="container">
	<div class="row">
            <div class="col-md-10 col-md-offset-1">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
		
		<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="images/gal_8.jpg" alt="...">
   
    </div>
    <div class="item">
      <img class="img-responsive" src="images/gal_1.jpg" alt="...">
    </div>
	
	<div class="item">
      <img class="img-responsive" src="images/gal_3.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_4.jpg" alt="...">
    </div>
	<div class="item">
      <img  class="img-responsive" src="images/gal_5.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_6.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_7.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_8.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_9.jpg" alt="...">
    </div>
	<div class="item">
      <img class="img-responsive" src="images/gal_10.jpg" alt="...">
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
      </div>
    </div>
		</div>
</div>
		</div>
	</div>
</div>
@endsection
