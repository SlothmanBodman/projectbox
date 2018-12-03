<div>
  <form action="{{ url("newUser") }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="user_name" placeholder="Username">
      <input type="text" name="user_email" placeholder="Email Address">
        <input type="text" name="user_password"  onfocus="this.type='password'" placeholder="Password">
      <input type="text" name="conf_password" onfocus="this.type='password'" placeholder="Confirm Password">
    <button type="submit" name="submit">Sign Up</button>
  </form>
</div>
