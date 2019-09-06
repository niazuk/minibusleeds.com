<img src="{{asset('images/fleet/wifi-icon.png')}}"
                            alt="{{config('data.fleet.feature1.alt')}}">
<section class="buses-details">
    <span class="blank-bg"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="h2Title">{{config("data.minibus-fleet.header$section")}}</h2>
            </div>
            <div class="col-md-8">
                <div class="utilities">
                    <span class="ribbonTag">Features</span>
                    <ul>
                        <li>
                            <img src="{{asset('images/fleet/wifi-icon.png')}}"
                            alt="{{config('data.fleet.feature1.alt')}}">
                            <span>{{config('data.minibus-fleet.feature1.name')}}</span>
                        </li>
                        <li>
                            <img src="{{asset('images/fleet/luggage-icon.png')}}"
                            alt="{{config('data.fleet.feature2.alt')}}">
                            <span>{{config('data.minibus-fleet.feature2.name')}}</span>
                        </li>
                        <li>
                            <img src="{{asset('images/fleet/outlet-icon.png')}}"
                            alt="{{config('data.fleet.feature3.alt')}}">
                            <span>{{config('data.minibus-fleet.feature3.name')}}</span>
                        </li>
                        <li>
                            <img src="{{$section == 1 ? asset('images/fleet/reclining-seat-icon.png') :
                            asset('images/fleet/legroom-icon.png')}}"
                            alt="{{$section == 1 ? config('data.fleet.feature4a.alt'):config('data.fleet.feature4b.alt')}}">
                            <span>{{$section == 1 ? config('data.minibus-fleet.feature4a.name'):config('data.minibus-fleet.feature4b.name')}}</span>
                        </li>
                        <li>
                            <img src="{{asset('images/fleet/restroom-icon.png')}}"
                            alt="{{config('data.fleet.feature5.alt')}}">
                            <span>{{config('data.minibus-fleet.feature5.name')}}</span>
                        </li>
                        <li>
                            <img src="{{asset('images/fleet/tv-icon.png')}}"
                            alt="{{config('data.fleet.feature6.alt')}}">
                            <span>{{config('data.minibus-fleet.feature6.name')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="charterBusListing row">
            @if($section == 1)
                @for($j=1;$j<=3;$j++)
                <li class="col-sm-4">
                    <figure>
                        <img src="{{asset("images/fleet/coach$j.jpg")}}" class="img-responsive center-block"
                        alt="{{config("data.fleet.coach$j.alt")}}">
                    </figure>
                    <h3>{{config("data.minibus-fleet.coach$j.title")}}</h3>
                    <h4>{{config("data.minibus-fleet.coach$j.subtitle")}}</h4>
                    <span class="seperator"></span>
                </li>
                @endfor            
            @else
            @for($j=1;$j<=5;$j++)
            <li class="col-sm-4">
                <figure>
                    <img src="{{asset("images/fleet/mini$j.png")}}" class="img-responsive center-block"
                    alt="{{config("data.fleet.mini$j.alt")}}">
                </figure>
                <h3>{{config("data.minibus-fleet.mini$j.title")}}</h3>
                <h4>{{config("data.minibus-fleet.mini$j.subtitle")}}</h4>
                <span class="seperator"></span>
            </li>
            @endfor
            @endif
        </ul>
    </div>
</section>