<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter User name"><br><br>
    <input type="password" name="password" placeholder="Enter User password"><br><br>
    <button type="submit">Login</button>

</form>