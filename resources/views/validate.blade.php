<form action="{{ route('next') }}" method="post">
    @csrf
    <input type="text" name="year">
    <button type="submit" name="submit">Submit</button>
     @if(count($errors) > 0)
         <p>{{ $errors->first('year') }}</p>
    @endif
</form>