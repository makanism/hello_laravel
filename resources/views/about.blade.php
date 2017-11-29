@extends('layout')

@section('content')

<!-- PHP biasa -->
  <ul>
    <li>Name: <?php echo $name; ?></li>
    <li>Gender: <?php echo $gender; ?></li>
  </ul>
  <?php if($age > 18): ?>
    <p>You are ok</p>
  <?php else: ?>
    <p>You are not ok</p>
  <?php endif; ?>


  <!-- Sintak Blade -->
  <ul>
    <li>Name: {{ $name }}</li>
    <li>Gender: {{ $gender }}</li>
  </ul>

  @if($age > 18)
    <p>You are ok</p>
  @else
    <p>You are not ok</p>
  @endif

  <p>Skills: </p>
  @foreach ($skills as $s)
      {{ $s }},
  @endforeach

@endsection
