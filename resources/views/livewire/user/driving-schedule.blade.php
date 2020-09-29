<div class="mt-5">

    <div class="bg-white mx-auto w-7/12 shadow-sm p-3">
        MAN Lion's City -  #2421
    </div>

    @foreach($routes as $item)
<div class="bg-white mx-auto w-7/12 shadow-sm p-3 mt-3">
    <div class="flex">
        <div class="text-green-500 font-bold w-3/12">{{$item->mode}}</div>
        <div class="w-8/12">
            {{$item->route->number}} {{$item->route->autoName()}}
            <hr>
            <span class="text-sm text-gray-500">
                {{$item->bus}}
            </span>
        </div>
        <div class="w-1/12 text-right">
            <input type="checkbox" name="completed" id="">
        </div>
    </div>
</div>
@endforeach
</div>
