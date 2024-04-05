@extends('backend.layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity">
                                            <h4>Total Income</h4>
                                            <h3>$ <span class="counter">5,79,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Total Expences</h4>
                                            <h3>$ <span class="counter">79,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Cash on Hand</h4>
                                            <h3>$ <span class="counter">92,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Net Profit Margin</h4>
                                            <h3>$ <span class="counter">1,79,000</span> </h3>
                                            <p>Saved 65%</p>
                                        </div>
                                    </div>
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