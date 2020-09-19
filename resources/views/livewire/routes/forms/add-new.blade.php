<div class="default-form">
    @if(!auth()->user() || !auth()->user()->company)
    <div class="message-box alert">
        To save your routes, <a href="{{route('register')}}">Register</a>! Quick Share Routes will be deleted after 5 days.
    </div>
    @endif
    <p class="italic p-3 bg-white shadow-sm mb-3">
        @if(!auth()->user() || !auth()->user()->company)
        If you want to quickly share your routes use this tool. If you want to maintain a
        collection of your routes - <a href="{{route('register')}}">register</a> and create your company. Read more details <a href="#">here</a>.
        @endif
    </p>
    <div>

       <div class="flex">
           <div class="w-6/12">
            <form action="{{$this->formAction}}" method="POST">
                {{ csrf_field() }}

                <div class="bg-white p-3">
                    <label>Route Number:</label>
                    <input type="text" class="rounded shadow-sm text-center" placeholder="23,U1,M13..." name="number" @if($edit) value="{{$route->number}}"@endif>
                </div>

                <ul id="sortable1" class="connectedSortable bg-white shadow-sm p-3" style="min-height:400px">
                    <span class="text-gray-200">
                        drag&drop bus stops here in order of your route
                        @if($edit)
                        @foreach($route->stops as $stop)
                        <li class="ui-state-default">{{$stop->name}}
                            <input type="hidden" name="stops[]" value="{{$stop->id}}">
                        </li>
                        @endforeach
                        @endif
                    </span>
                </ul>
                <div class="w-full">
                    <input type="submit" class="submit-button w-full" value="Share!">
                </div>
           </form>
            </div>
            <div class="w-1/12"></div>
          <div class="w-5/12" style="max-height: 500px;overflow-y:scroll">
            <ul id="sortable2" class="flex flex-wrap connectedSortable">
                @foreach($areas as $area)
                <div class="w-2/4">
                    <strong>{{$area->name}}</strong>
                    @foreach($area->stops as $stop)
                    @if($edit)
                        @if(!$route->stops->contains($stop))
                        <li class="ui-state-default">{{$stop->name}}
                            <input type="hidden" name="stops[]" value="{{$stop->id}}">
                        </li>
                        @endif
                    @else
                    <li class="ui-state-default">{{$stop->name}}
                        <input type="hidden" name="stops[]" value="{{$stop->id}}">
                    </li>
                    @endif
                    @endforeach
                    <div class="mb-2"></div>
                </div>
                @endforeach
              </ul>
         </div>
       </div>
    </div>


</div>


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $( function() {
      $( "#sortable1, #sortable2" ).sortable({
        connectWith: ".connectedSortable",
        items:"li"
      }).disableSelection();
    } );
    </script>

@endsection

@section('external-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
@endsection
