@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
  <h1>Welcome to Login Panel</h1>
  <p>After login this page show</p> 
</div>
<div class="container">
  <div class="row">
    you are logg in


<form method="post">
	{!! csrf_field() !!}
	<input type="submit">
</form>


 <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
    </thead>
    <tbody>
<?php

foreach ($posts_data as $value) {

	?>
      <tr>
        <td><?php echo $value->id;?></td>
        <td><?php echo $value->asdf;?></td>
       
      </tr>

  <?php
}
?>
     
    </tbody>
  </table>


  </div>
</div>
@endsection