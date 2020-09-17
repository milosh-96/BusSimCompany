<select name="stops[]" multiple class="big-select w-full md:w-2/3" size="20" id="new-route">
    @if($selectedStops)
    {{print_r($selectedStops)}}
    @foreach($selectedStops as $stop)
    <option id="stop-{{$stop->id}}" data-id="{{$stop->id}}" value="{{$stop->id}}">{{$stop->name}}</option>
    @endforeach
    @endif
</select>
