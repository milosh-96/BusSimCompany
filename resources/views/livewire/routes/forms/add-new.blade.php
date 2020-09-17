<form class="default-form" wire:submit.prevent="saveRoute" method="POST">

    @if(!auth()->user() || !auth()->user()->company)
    <div class="message-box alert">
        To save your routes, <a href="{{route('register')}}">Register</a>! Quick Share Routes will be deleted after 5 days.
    </div>
    @endif
    <p class="italic">
        @if(!auth()->user() || !auth()->user()->company)
        If you want to quickly share your routes use this tool. If you want to maintain a
        collection of your routes - <a href="{{route('register')}}">register</a> and create your company. Read more details <a href="#">here</a>.
        @endif
    </p>
    <div>
        <div>
           <label>Enter number of your route:</label> <input style="width:150px" placeholder="route number" class="text-2xl rounded-md mx-3 text-center text-white bg-green-500" wire:model="number" />
        </div>
        <div class="md:flex">
            <div class="subject-info-box-1 w-5/12">
                <select multiple="multiple" size="10" style="max-height: 300px"  wire:model="stops[]" id="lstBox1" class="w-full">
                </select>
              </div>

              <div class="subject-info-arrows text-center w-2/12">
                <input type="button" id="btnAllRight" value=">>"" class="block w-full btn btn-default" />
                <input type="button" id="btnRight" value=">"" class="block w-full btn btn-default" />
                <input type="button" id="btnLeft" value="<"" class="block w-full btn btn-default" />
                <!--<input type="button" id="btnAllLeft" value="<<"" class="block w-full btn btn-default" />-->
              </div>

              <div class="subject-info-box-2 w-5/12">
                <select multiple="multiple"  size="10" style="height: 300px"  id="lstBox2" class="w-full">
                  @foreach($areas as $area)
                      <optgroup label="{{$area->name}}">
                        @foreach($area->stops as $stop)
                        <option value="{{$stop->id}}">{{$stop->name}}</option>
                        @endforeach
                    </optgroup>
                  @endforeach
                </select>
              </div>

              <div class="clearfix"></div>
        </div>

</div>
<div class="w-full">
    <input type="submit" class="submit-button w-full" value="Share!">
</div>
</form>


@section('scripts')
<script>
(function () {
    $("#btnRight").click(function (e) {
      var selectedOpts = $("#lstBox1 option:selected");
      if (selectedOpts.length == 0) {
        alert("Nothing to move.");
        e.preventDefault();
      }

      $("#lstBox2").append($(selectedOpts).clone());
      $(selectedOpts).remove();
      e.preventDefault();
    });

    $("#btnAllRight").click(function (e) {
      var selectedOpts = $("#lstBox1 option");
      if (selectedOpts.length == 0) {
        alert("Nothing to move.");
        e.preventDefault();
      }

      $("#lstBox2").append($(selectedOpts).clone());
      $(selectedOpts).remove();
      e.preventDefault();
    });

    $("#btnLeft").click(function (e) {
      var selectedOpts = $("#lstBox2 option:selected");
      if (selectedOpts.length == 0) {
        alert("Nothing to move.");
        e.preventDefault();
      }

      $("#lstBox1").append($(selectedOpts).clone());
      $(selectedOpts).remove();
      e.preventDefault();
    });

    $("#btnAllLeft").click(function (e) {
      var selectedOpts = $("#lstBox2 option");
      if (selectedOpts.length == 0) {
        alert("Nothing to move.");
        e.preventDefault();
      }

      $("#lstBox1").append($(selectedOpts).clone());
      $(selectedOpts).remove();
      e.preventDefault();
    });
  })(jQuery);
</script>
  @endsection
