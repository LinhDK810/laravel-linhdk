<div class="col-sm-8">
    @foreach($content as $value)
        <h2>TITLE HEADING {{$value["name"]}}</h2>
        <h5>{{$value["cript"]}}, Sep 2, 2017</h5>
        <div class="fakeimg">{{$value["image"]}}</div>
        <p>Some text..</p>
        <p>{{$value["content"]}}</p>
        @endforeach

</div>