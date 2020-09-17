<div class="route-item">
    <a  class="flex" href="{{route('routes.details',$route->permalink())}}">
        <div style="min-width:20px">{{$route->number}}</div><div> | {{$route->autoName()}}</div>
    </a>
</div>
