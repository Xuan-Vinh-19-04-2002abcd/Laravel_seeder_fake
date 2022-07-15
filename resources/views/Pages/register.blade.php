@include('partical.Header')
<form action="/register" method="POST" class="beta-form-checkout">								
      @csrf								
      <div class="row">								
        <div class="col-sm-3"></div>								
        <div class="col-sm-6">								
          <h4>Đăng kí</h4>								
          <div class="space20">&nbsp;</div>								
								
          <div class="form-block">								
            <label for="email">Email address*</label>								
            <input type="email" id="email" name="email" required>								
          </div>								
								
          <div class="form-block">								
            <label for="name">Fullname*</label>								
            <input type="text" id="name" name="name" required>								
          </div>								
								
          <div class="form-block">								
            <label for="password">Password*</label>								
            <input type="password" id="password" name="password" required>								
          </div>								
								
          <div class="form-block">								
            <label for="c_password">Repassword*</label>								
            <input type="password" id="c_password" name="c_password" required>								
          </div>								
		@error('c_password')
                <span style="color: red">{{$message}}</span>
                    @enderror				
          <div class="form-block">								
            <button type="submit" class="btn btn-primary">Register</button>								
          </div>								
								
        </div>								
        <div class="col-sm-3"></div>								
      </div>								
    </form>		
    <p class="text-center">Nếu chưa có tài khoản vui lòng <a href="/register">Đăng ký</a>!</p>														