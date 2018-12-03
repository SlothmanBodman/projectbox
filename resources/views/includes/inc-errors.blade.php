@if ($errors->any())
  <div class="error-box">
      <h1 class="invert-color">ERROR</h1>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
  </div>
@endif
