<x-app-layout>
@include('layouts.navigation-drawer')
@if($user)
<div class="w-75">
    @include('layouts.navigation')
    <div class="container w-100" style="height: 478px;">

  <!-- Content here -->
    </div>
    <div class="mb-3 p-3">
    <textarea class="form-control" placeholder="Type here..." id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <!-- {{ $users }} -->
</div>
@else
<div class="w-75">
  No selected user
@endif
</div>
</x-app-layout>
