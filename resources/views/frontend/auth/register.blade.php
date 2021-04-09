@extends('frontend.master')

@section('body-content')


  <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="signup.html">Signup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                        <form action="{{ route('user.register')}}" method="post" class="l-f-o__form">
                                            
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-fname">FULL NAME *</label>

                                                <input class="input-text input-text--primary-style" name="name" type="text" id="reg-fname" value="{{ old('name')}}" placeholder="Full Name">
                                            </div>


                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-fname">PHONE NUMBER *</label>

                                                <input class="input-text input-text--primary-style" name="number" type="number" id="reg-fname" value="{{ old('number')}}" placeholder="Phone Number">
                                            </div>
                                            
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-email">E-MAIL *</label>

                                                <input class="input-text input-text--primary-style" name="email" type="text" id="reg-email" value="{{ old('email')}}" placeholder="Enter E-mail"></div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-password">PASSWORD *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="reg-password" name="password" placeholder="Enter Password"></div>
                                            <div class="u-s-m-b-15">

                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-password">CONFIRM PASSWORD *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="reg-password" name="confirmpassword" placeholder="Re - Enter Password"></div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button></div>

                                            <a class="gl-link" href="#">Return to Store</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->

@endsection