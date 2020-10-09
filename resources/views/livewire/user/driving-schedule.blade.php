<div class="mt-5">

    <div class="bg-white mx-auto w-7/12 shadow-sm p-3">
        {{$userBus["bus"]}} - #{{$userBus["depotNo"]}}
    </div>

    @foreach($routes as $item)
<div class="bg-white mx-auto w-7/12 shadow-sm p-3 mt-3">
    <div class="flex">
        <div class="text-green-500 font-bold w-3/12">{{$item->period}}</div>
        <div class="w-8/12">
            {{$item->route->number}} {{$item->route->autoName()}}
        </div>
        <div class="w-1/12 text-right">
            <input type="checkbox" name="completed" id="">
        </div>
    </div>
</div>
@endforeach
</div>
