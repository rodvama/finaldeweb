<nav>
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo"><i class="material-icons">devices</i>ProyectoFinal</a>
    <ul class="right hide-on-med-and-down">
    	@if (Auth::check())
	    	<li><a href=""><i class="material-icons">search</i></a></li>
	      <li><a href=""><i class="material-icons">view_module</i></a></li>
	      <li><a href="">sass <span class="new badge">4</span></a></li>
	      <li><a href=""><i class="material-icons">refresh</i></a></li>
	      <li><a href=""><i class="material-icons">more_vert</i></a></li>
			@else
				<!-- Modal Trigger -->
  			<a class="waves-effect waves-light btn modal-trigger" href="#modal1">LOGIN</a>			
			@endif
    </ul>
  </div>
</nav