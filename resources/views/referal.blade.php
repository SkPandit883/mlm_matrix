@extends('layouts.sidebar')
@section('content')
<div>
  <h2 class="text-xl mt-5">Referal Code</h2>
  <div class="flex flex-col justify-center items-center bg-gray-100 h-32 mt-16">
      <h2 class="text-xl">Your Referal Code :  <span class="text-blue-800">{{$referal_code}}</span> </h2><br>
      <h2>Share with your connections to create downline</h2>
  </div>
</div>
@endsection
