@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

<div class=wrapper>
 <h2> Edit PRODUCT </h2>

 <form action="/{{$vehicle ->id }}" method="POST">
 @csrf
 <label for="car">  Name of Car : </label>
 <input type="text" name="car" id="car" value={{$vehicle-> car}}

<label for="code"> Enter Code : </label>
<input type="text" name="code" id="code" value={{$vehicle-> code}}>

<label for="country"> Country : </label>
<input type="text" name="country" id="country" value={{$vehicle-> country}}>

<input type="submit" value=" Edit ">
 
 </form>

</div>



</div>

@endsection('content')