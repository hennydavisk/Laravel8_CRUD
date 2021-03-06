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
      <td> 
        <form action="/{{$vehicle->id}}" method="GET">
        @csrf
        <button> Edit </button>
        </form>
      </td>
      <td> 
        <form action="/{{$vehicle -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button> Delete </button>
        </form>
      </td>
    </tr> 
    @endforeach
  </tbody>
</table>
</br> 
<div style="float: right">
<a href="/create"> Add a new product</a>
</div> 

</div>



</div>

@endsection('content')