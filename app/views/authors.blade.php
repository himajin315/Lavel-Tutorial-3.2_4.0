@extends('layout')

@section('content')

{{ $name }}<br />
{{ $age }}<br />
{{ $location }}<br />
{{ $specialty }}<br />

<!-- 
laravel 3.2

<?php echo $name; ?><br />
<?php echo $age; ?><br />
<?php echo $location ?><br />
<?php echo $specialty ?><br />

-->
@stop