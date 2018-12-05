<div>
  <form action="{{ url("login") }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="user_login_email" placeholder="Email Address">
    <input type="text" name="user_login_password" onfocus="this.type='password'" placeholder="Password">
    <button type="submit" name="submit">Login</button>
  </form>
</div>
