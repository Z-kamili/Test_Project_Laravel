<div>
    @if($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
    <li style="color: red;margin-left:10px">{{$error}}</li>            
    @endforeach
    </ul>
    @endif
</div>