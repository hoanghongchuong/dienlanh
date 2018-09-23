<?php
    $setting = Cache::get('setting');
?>
<footer class="b1 ft">
    <div class="container">
        <div class="ft-1">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text-lg-left text-center"><a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" title="" alt=""></a></div>
                    <div class="ft-cap">
                        {{$setting->fax}}
                    </div>
                    <ul class="list-unstyled ft-add">
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-phone"></i>
                            <a href="tel:{{$setting->phone}}" title="">{{$setting->phone}}</a>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-envelope"></i> <a href="mailto:{{$setting->email}}" title="">{{$setting->email}}</a>
                        </li>
                        
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-map-marker-alt"></i> 
                            <span>{{$setting->address}}</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 offset-lg-2 col-md-6">
                    <ul class="text-lg-right text-center list-inline ft-social">
                        <li><a href="{{$setting->facebook}}" title=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$setting->twitter}}" title=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$setting->youtube}}" title=""><i class="fab fa-youtube"></i></a></li>
                    </ul>

                    <form class="text-lg-right text-center ft-frm" method="post" action="{{ route('postNewsletter') }}">
                        {{csrf_field()}}
                        <input type="email" placeholder="Email" name="txtEmail" required="required">
                        <button class="btn " type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="s12 text-lg-right text-center light ft-last">
            © <a href="#" title=""></a> 2018. All rights reserved.
        </div>
    </div>
</footer>
