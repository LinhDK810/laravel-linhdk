<form method="post" action="{{route("check.login")}}">
    {{ csrf_field() }}
    <p>Username:</p>
    <input type="text" name="user" value="">
    <br>
    <p>Password:</p>
    <input type="password" name="pass" value="">
    <br>
    <p>token</p>
    <input type="text" name="token" >
    <button type="submit">login</button>
</form>