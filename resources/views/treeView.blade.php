@extends('layouts.sidebar')
@section('content')
<div>
    <h2>Tree View..</h2>
</div>
<div class="tf-tree tf-custom mt-10">
    <ul>
      <li>
        <span class="tf-nc">1</span>
        <ul>
          <li>
            <span class="tf-nc">{{$level_zero->left_child}}</span>
          </li>
          <li>
            <span class="tf-nc">{{$level_zero->middle_child}}</span>
          </li>
          <li>
            <span class="tf-nc">{{$level_zero->right_child}}</span>
          </li>
        </ul>
      </li>
     
    </ul>
  </div>
@endsection
{{-- <li>
  <span class="tf-nc">1</span>
  <ul>
    <li>
      <span class="tf-nc">2</span>
      <ul>
        <li><span class="tf-nc">4</span></li>
        <li>
          <span class="tf-nc">5</span>
          <ul>
            <li><span class="tf-nc">9</span></li>
            <li><span class="tf-nc">10</span></li>
          </ul>
        </li>
        <li><span class="tf-nc">6</span></li>
      </ul>
    </li>
    <li>
      <span class="tf-nc">3</span>
      <ul>
        <li><span class="tf-nc">7</span></li>
        <li><span class="tf-nc">8</span></li>
        <li><span class="tf-nc">8</span></li>
      </ul>
    </li>
    <li>
      <span class="tf-nc">4</span>
      <ul>
        <li><span class="tf-nc">7</span></li>
        <li><span class="tf-nc">8</span></li>
      </ul>
    </li>
  </ul>
</li> --}}