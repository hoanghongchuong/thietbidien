@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 5)->first();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-larger-12 title-h1">
           <div class="elementor elementor-1458">
              <div class="elementor-inner">
                 <div class="elementor-section-wrap">
                    <section class="has_ae_slider elementor-element elementor-element-3b38420 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3b38420"
                       data-element_type="section">
                       <div class="elementor-container elementor-column-gap-no">
                          <div class="elementor-row">
                             <div class="has_ae_slider elementor-element elementor-element-90f828d elementor-column elementor-col-100 elementor-top-column" data-id="90f828d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                   <div class="elementor-widget-wrap">
                                      <div data-id="75895dc" class="elementor-element elementor-element-75895dc elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                         <div class="elementor-widget-container" style="margin-top: 20px;">
                                            <h3 class="elementor-heading-title elementor-size-default">Thông tin liên hệ</h3>
                                         </div>
                                      </div>
                                      <section class="has_ae_slider elementor-element elementor-element-3c70c37 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="3c70c37"
                                         data-element_type="section">
                                         <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                               <div class="has_ae_slider elementor-element elementor-element-1140687 elementor-column elementor-col-50 elementor-inner-column" data-id="1140687" data-element_type="column">
                                                  <div class="elementor-column-wrap elementor-element-populated">
                                                     <div class="elementor-widget-wrap">
                                                        <div data-id="dc843fb" class="elementor-element elementor-element-dc843fb elementor-button-align-end elementor-mobile-button-align-center elementor-widget elementor-widget-form" data-element_type="form.default">
                                                           <div class="elementor-widget-container">
                                                              <form class="elementor-form" action="{{route('postContact')}}" method="post" name="New Form">
                                                                {{csrf_field()}}
                                                                 <div class="elementor-form-fields-wrapper elementor-labels-">
                                                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-50"><label for="form-field-name" class="elementor-field-label elementor-screen-only">Name</label><input size="1" type="text" name="name" id="form-field-name" class="elementor-field elementor-size-sm elementor-field-textual"
                                                                       placeholder="Name"></div>
                                                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required"><label for="form-field-email" class="elementor-field-label elementor-screen-only">Email</label><input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm elementor-field-textual"
                                                                       placeholder="Email" required="required" aria-required="true"></div>
                                                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-b26ecb6 elementor-col-50 elementor-field-required"><label for="form-field-b26ecb6" class="elementor-field-label elementor-screen-only">Phone</label><input size="1" type="text" name="phone" id="form-field-b26ecb6"
                                                                       class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Phone" required="required" aria-required="true"></div>
                                                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-894019a elementor-col-50 elementor-field-required"><label for="form-field-894019a" class="elementor-field-label elementor-screen-only">Address</label><input size="1" type="text" name="address" id="form-field-894019a"
                                                                       class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Address" required="required" aria-required="true"></div>
                                                                    <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100"><label for="form-field-message" class="elementor-field-label elementor-screen-only">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-sm"
                                                                       name="content" id="form-field-message" rows="4" placeholder="Message"></textarea></div>
                                                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100"><button type="submit" class="elementor-button elementor-size-sm"><span><span class="elementor-button-text">Send Message</span></span></button></div>
                                                                 </div>
                                                              </form>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                               <div class="has_ae_slider elementor-element elementor-element-a379f87 elementor-column elementor-col-50 elementor-inner-column" data-id="a379f87" data-element_type="column">
                                                  <div class="elementor-column-wrap elementor-element-populated">
                                                     <div class="elementor-widget-wrap">
                                                        <div data-id="1559286" class="elementor-element elementor-element-1559286 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                           <div class="elementor-widget-container">
                                                              <div class="elementor-icon-box-wrapper">
                                                                 <div class="elementor-icon-box-icon"><span class="elementor-icon elementor-animation-"><i class="fa fa-mobile-phone" aria-hidden="true"></i></span></div>
                                                                 <div class="elementor-icon-box-content">
                                                                    <h3 class="elementor-icon-box-title"><span>{{$setting->phone}}</span></h3>
                                                                    <p class="elementor-icon-box-description"></p>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div data-id="24386bd" class="elementor-element elementor-element-24386bd elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
                                                           <div class="elementor-widget-container">
                                                              <div class="elementor-text-editor elementor-clearfix">
                                                                 <p><strong>Address</strong></p>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div data-id="8a76a0d" class="elementor-element elementor-element-8a76a0d elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
                                                           <div class="elementor-widget-container">
                                                              <div class="elementor-text-editor elementor-clearfix">
                                                                 <p><strong>Email </strong>{{$setting->email}}</p>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </section>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                    <section class="has_ae_slider elementor-element elementor-element-241431a1 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="241431a1"
                       data-element_type="section">
                       <div class="elementor-container elementor-column-gap-no">
                          <div class="elementor-row">
                             <div class="has_ae_slider elementor-element elementor-element-7cb85240 elementor-column elementor-col-100 elementor-top-column" data-id="7cb85240" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                   <div class="elementor-widget-wrap">
                                      <div data-id="a78374c" class="elementor-element elementor-element-a78374c elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                         <div class="elementor-widget-container">
                                            <h6 class="elementor-heading-title elementor-size-default">Contact</h6>
                                         </div>
                                      </div>
                                      <div data-id="4777d403" class="elementor-element elementor-element-4777d403 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                         <div class="elementor-widget-container">
                                            <h6 class="elementor-heading-title elementor-size-default"><a href="{{$setting->phone}}">{{$setting->phone}}</a></h6>
                                         </div>
                                      </div>
                                      <div data-id="19e10f07" class="elementor-element elementor-element-19e10f07 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                         <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Địa chỉ</h3>
                                         </div>
                                      </div>
                                      <div data-id="75814400" class="elementor-element elementor-element-75814400 elementor-widget elementor-widget-google_maps" data-element_type="google_maps.default">
                                         <div class="elementor-widget-container">
                                            <div class="elementor-custom-embed">{!! $setting->iframemap !!}</div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                 </div>
              </div>
           </div>
        </div>
    </div>
</div>
@endsection
