@extends('layouts.sidebar')
@section('content')
<div>
  <h2 class="text-xl mt-5">Tree View</h2>
</div>
<div class="tf-tree tf-custom mt-10">
    <ul>
      <li>
        <span class="tf-nc">Admin (1)</span>
        <ul>
         @foreach ($level_one as $l_one)
            <li>
              <span class="tf-nc">User ID({{$l_one->user_id}})</span>
              <ul>
                 @foreach ($level_two as $l_two)
                    @if($l_one->user_id===$l_two->parent_id)
                      <li>
                        <span class="tf-nc">User ID({{$l_two->user_id}})</span>
                        <ul>
                          @foreach($level_three as $l_three)
                            @if ($l_two->user_id == $l_three->parent_id)
                              <li><span class="tf-nc">User ID({{$l_three->user_id}})</span></li>  
                            @endif
                          @endforeach
                        </ul>
                      </li>
                   @endif
                 @endforeach
              </ul>
            </li>
         @endforeach
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