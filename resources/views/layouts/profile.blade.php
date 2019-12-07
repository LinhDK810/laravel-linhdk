<div class="col-sm-4">
    <h2>About Me</h2>
    <h5>Photo of {{$name}}:</h5>
    <div class="fakeimg">Fake Image</div>
    <p>{{$content}}</p>
    <h3>Some Links</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <ul class="nav nav-pills flex-column">
        @foreach($links as $value)
            <li class="nav-item">
                <a class="nav-link active" href="#">{{$value}}</a>
            </li>
        @endforeach
    </ul>
    <hr class="d-sm-none">
</div>