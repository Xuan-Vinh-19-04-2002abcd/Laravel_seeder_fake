@include('partical.Header')
    <form action="/login" method="post" class="beta-form-checkout">									
      <div class="row">									
        @csrf									
        <div class="col-sm-3"></div>									
        <div class="col-sm-6">									
          <h4>Đăng nhập</h4>									
          <div class="space20">&nbsp;</div>									
									
          <div class="form-block">									
            <label for="email">Email address*</label>									
            <input type="email" id="email" name="email" required>									
          </div>									
          <div class="form-block">									
            <label for="pw">Password*</label>									
            <input type="password" id="pw" name="pw" required>									
          </div>									
          <div class="form-block">									
            <button type="submit" class="btn btn-primary">Login</button>									
          </div>									
        </div>									
        <div class="col-sm-3"></div>									
      </div>									
    </form>									