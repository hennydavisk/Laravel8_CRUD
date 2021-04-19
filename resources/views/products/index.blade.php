@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

<div class=wrapper>
 <h2> LIST OF PRODUCTS </h2>
<table>
  <thead>
    <tr>
      <th> CAR </th>
      <th> CODE </th>
      <th> COUNTRY </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($vehicles as $vehicle)
    <tr>
      <td> {{ $vehicle -> car}} </td>
      <td> {{ $vehicle -> code}} </td>
      <td> {{ $vehicle -> country}} </td>
      <td> <button>EDIT </button> </td>
      <td> <button> DELETE </button> </td>
    </tr> 
    @endforeach
  </tbody>
</table>
</div>

</div>

@endsection('content')