@extends('frontend.layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">


            @if (!empty($sliders))
                @foreach ($sliders as $key => $value)
                    <div class="carousel-item {{ $key == 0 ? "active" : "" }}">
                        <img class="img-fluid" src="{{ asset('upload/slider') }}/{{ $value->slider_image }}" alt="item-image" style="width:1700px;height:550px" />
                    </div>
                @endforeach
            @endif


            {{-- <div class="carousel-item active">
                <img src="{{ asset('frontend/assets/images/banner/slider1.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/images/banner/slider__5.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/images/banner/slider__5-2.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="about rts__padding--120-100 v__1">
        <section id="" class="text-center" style="background-color: #14b7f1;">
            <div>&nbsp;</div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div align="center">
                                @if ($manager)
                                    <img style="border: 2px solid #DEDEDE;"
                                        src="{{ asset('upload/staff') }}/{{ $manager->user_details->profile_image }}"
                                        width="200">
                                @endif

                                <div style="font-size: 20px; color: white;"><strong>{{ $manager->name ?? '' }}</strong>
                                </div>
                                <div style="color: white;font-size: 15px;">(Manager)</div>
                            </div>
                            <h3 style="color: #FFF;" "="">{{ $manager->user_details->qualification ?? '' }}</h3>
                                                                          <div style="color: #FFF; font-size: 15px;"><p>
                                                          </p>
                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                      <div class="col-lg-6">
                                                                        <div class="about-content">
                                                                        <div align="center">
                                                                                 @if ($principal)
                                <img style="border: 2px solid #DEDEDE;"
                                    src="{{ asset('upload/staff') }}/{{ $principal->user_details->profile_image }}"
                                    width="200">
                                @endif
                                <div style="font-size: 20px; color: white;"><strong>{{ $principal->name ?? '' }}</strong>
                                </div>
                                <div style="color: white;font-size: 15px;">(Principal)</div>
                        </div>
                        <h3 style="color: #FFF;" "="">{{ $principal->user_details->qualification ?? '' }}</h3>
                                                <div style="color: white;font-size: 15px;">
                                                    <p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>&nbsp;</div>
                            </section>
                            <br><br>
                            <h3 class="text-center">Some Fun Facts</h3>
                            <p class="text-center">Empowering Minds, Building Futures: Educating the Leaders of Tomorrow.</p>
                            <div class="container rts__pt100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 rts-funfact v__1">
                                        <div class="rts-funfact-wrapper">
                                            <div class="single-cta-item">
                                                <h2 class="single-cta-item__title">{{ $student ?? '0' }}</h2>
                                                <p>
                                                    Students</p>
                                            </div>
                                            <div class="single-cta-item">
                                                <h2 class="single-cta-item__title">{{ $teacher ?? '0' }}</h2>
                                                <p>Teachers</p>
                                            </div>
                                            <div class="single-cta-item">
                                                <h2 class="single-cta-item__title">{{ $staff ?? '0' }}</h2>
                                                <p>Other Staff</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="rts__section rts-section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="rts__section--wrapper v__2">
                                            <h2 class="rts__section--title">Important Notice</h2>
                                            <p class="rts__section--description">{{ $notice->notice ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <img src="{{ asset('frontend/assets/images/notice.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="rts-page-content">
                            <div class="container">
                                <div class="row">


                                    <div class="col-12 ">
                                        <div class="admission-content-top">
                                            <div class="application-deadline">
                                                <h3 class="rts-section-title">Quick Links</h3>
                                                <div class="application-deadline__content">
                                                    <div class="application-deadline__content--table">
                                                        <table class="table">
                                                            <thead class="table-theme">
                                                                <tr>
                                                                    <td colspan="3">Some Important Links</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="https://upmsp.edu.in">https://upmsp.edu.in</a></td>
                                                                    <td><a href="https://sarkariresult.com">https://sarkariresult.com</a></td>
                                                                    <td><a href="http://scholarship.up.gov.in">http://scholarship.up.gov.in</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="http://rte25.upsdc.gov.in/">http://rte25.upsdc.gov.in/</a></td>
                                                                    <td><a href="https://shreegurudeontt.com">https://shreegurudeontt.com</a>
                                                                    </td>
                                                                    <td><a href="https://sgvti.com">https://sgvti.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="https://www.nielit.gov.in">https://www.nielit.gov.in</a></td>
                                                                    <td><a href="https://udiseplus.gov.in">https://udiseplus.gov.in</a></td>
                                                                    <td><a href="https://schoolreportcards.in">https://schoolreportcards.in</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="https://shasanadesh.up.gov.">https://shasanadesh.up.gov.</a>
                                                                    </td>
                                                                    <td><a href="https://up.gov.in">https://up.gov.in</a></td>
                                                                    <td><a href="https://www.india.gov.in">https://www.india.gov.in</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="https://upbhulekh.gov.in">https://upbhulekh.gov.in</a></td>
                                                                </tr>
                                                        </table>
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
@endsection
