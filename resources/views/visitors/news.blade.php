@extends('layouts.spacedcustomlayout')
<style>
    .widget2 {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 800px;
        width: 100%;
        margin-bottom: 40px
    }
</style>

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/news.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>BUSINESS AND STOCKS</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <!--secondlayer-->

                <div class="row">

                    <div class="col-md-8">

                        <div>
                            <h1>
                                Latest
                            </h1>

                        </div>
                    </div>
                </div>
           </div>
        </section>
       <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=News Provided by 24-7PressRelease.com&amp;categories=106,107,333,334,335,489,337,108,300,338,109,110,139,339,171,111,112,340,341,113,342,343,114,344,115,345,319,116,347,348,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=2d57a1&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=20&amp;bgcolor=ffffff&amp;urldest=247pr"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here --> 
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
    @endsection
