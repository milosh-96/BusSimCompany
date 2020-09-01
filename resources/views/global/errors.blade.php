    <!-- errors block -->
    @if($errors->any())
        <div class="message-box warning">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
<!--end of errors block -->
