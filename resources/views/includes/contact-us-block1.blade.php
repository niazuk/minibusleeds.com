 <div class="wraper">
   <div class="container">
    <div class="wow fadeInUp" data-wow-duration="3s">
      <div class="bread_crum"><a href="/">Home</a><span>&raquo;</span> Contact us</div>
      <div class="page_head"><h1>Contact us</h1></div>
    </div>
    <div class="wow fadeInUp" data-wow-duration="2s">

    </div>
  </div>
  <div class="container">
    <div class="wow fadeInDown" data-wow-duration="2s">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="cont_txt">
          <p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
        </div>
        <div class="cnt_icn">
          <a href="tel:{{config('data.meta.contact_number')}}">{{config('data.meta.contact_number')}}</a>
        </div>
        <div class="cnt_icn1">
          <a href="mailto:{{config('data.meta.contact_email')}}">{{config('data.meta.contact_email')}}</a>
        </div>
        <div class="cls"><br><br></div>
        <div class="cnt_icn"><p style="font-size: 21px;"><img src="{{asset("images/ad.png")}}" alt="Minibus Cardiff Address image"> {{config('data.meta.contact_address')}}</p>
        </div>
      </div>
      <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br />
        @endif
        <form name="ct" action="{{route('send_email', ['i'=>1])}}" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
              <div class="cont_nm">Name :</div>
              <input type="text" class="cont_inp" name="Cname" required>
            </div>
            <div class="col-md-6">
              <div class="cont_nm">Email :</div>
              <input type="email" class="cont_inp" name="email" required>
            </div>
          </div>
          <div class="cls"><br></div>
          <div class="row">
            <div class="col-md-6">
              <div class="cont_nm">Phone :</div>
              <input type="text" class="cont_inp" name="Cphone" required>
            </div>
            <div class="col-md-6">
              <div class="cont_nm">Subject :</div>
              <input type="text" class="cont_inp" name="Csubject" required>
            </div>
            <div class="cls"><br></div>
          </div>
          <div class="cls"><br></div>
          <div class="row">
            <div class="col-md-12">
              <div class="cont_nm">Comment:</div>
              <textarea class="cont_combo" name="message" required></textarea>              
            </div>
          </div>
          <div class="cls"><br></div>
          <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-12">
              <label for="ReCaptcha">Recaptcha:</label>
              {!! NoCaptcha::renderJs() !!}
              {!! NoCaptcha::display() !!}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" class="sbt_btn" name="submit" value="SUBMIT">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="cls"></div>
  </div>
  <div class="cls"><br></div>
  <iframe src="{{config('data.meta.map_url')}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>