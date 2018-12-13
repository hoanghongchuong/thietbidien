<?php
    $setting = Cache::get('setting');
   
?>
<footer>
    <div class="container-fluid footer">
        <div class="container">
            <div class="row ft">
                <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 col-large-6">
                    <div class="row">
                        <div class=" col-sm-4 col-md-4 logoft">
                            <img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}">
                        </div>
                        <div class=" col-sm-8 col-md-8 title-ft">
                            <h4>{{$setting->company}}</h4>
                            <p>Địa chỉ: {{$setting->address}}<br>
                                Phone: {{$setting->phone}}<br>
                                Email: {{$setting->email}}<br>
                                <!-- Website: hungthinh.vn -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>