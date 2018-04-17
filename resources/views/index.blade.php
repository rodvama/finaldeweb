@extends("layouts.master")

@section("content")
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

@endsection

@section("scripts")
<script>
	$(document).ready(function(){
	    $('.modal').modal();
	  });
</script>
@endsection