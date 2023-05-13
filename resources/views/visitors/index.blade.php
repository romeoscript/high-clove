@extends('layouts.spacedcustomlayout')
<!-- new one -->
<link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}">
<style>
    #row2 {
        height: 300px !important;
        overflow: visible;
    }

    @media (max-width:480) {
        #row2 {
            height: 700px !important;
        }

    }

.price_tag{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 20px;
  background: #14ae85;
}
.price_tag .wrapper{
  max-width: 1090px;
  width: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.price_tag .wrapper .table{
  background: #fff;
  width: calc(33% - 20px);
  padding: 30px 30px;
  position: relative;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.price_tag .table .price-section{
  display: flex;
  justify-content: center;
}
.price_tag .table .price-area{
  height: 120px;
  width: 120px;
  border-radius: 50%;
  padding: 2px;
}
.price_tag .price-area .inner-area{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border: 3px solid #fff;
  line-height: 117px;
  text-align: center;
  color: #fff;
  position: relative;
}
.price_tag .price-area .inner-area .text{
  font-size: 25px;
  font-weight: 400;
  position: absolute;
  top: -10px;
  left: 17px;
}
.price_tag .price-area .inner-area .price{
  font-size: 45px;
  font-weight: 500;
  margin-left: 16px;
}
.price_tag .table .package-name{
  width: 100%;
  height: 2px;
  margin: 35px 0;
  position: relative;
}
.price_tag .table .package-name::before{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 25px;
  font-weight: 500;
  background: #fff;
  padding: 0 15px;
  transform: translate(-50%, -50%);
}
.price_tag .table .features li{
  margin-bottom: 15px;
  list-style: none;
  display: flex;
  justify-content: space-between;
}
.price_tag .features li .list-name{
  font-size: 17px;
  font-weight: 400;
}
.price_tag .features li .icon{
  font-size: 15px;
}
.price_tag  .features li .icon.check{
  color: #2db94d;
}
.price_tag  .features li .icon.cross{
  color: #cd3241;
}
.price_tag  .table .btn{
  width: 100%;
  display: flex;
  margin-top: 35px;
  justify-content: center;
}
.price_tag .table .btn button{
  width: 80%;
  height: 50px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  border: none;
  outline: none;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.price_tag .table .btn button:hover{
  border-radius: 5px;
}
.price_tag .basic .features li::selection{
  background: #ffd861;
}
.price_tag .basic ::selection,
.price_tag .basic .price-area,
.price_tag .basic .inner-area{
  background: #ffd861;
}
.price_tag .basic .btn button{
  border: 2px solid #ffd861;
  background: #fff;
  color: #ffd861;
}
.price_tag .basic .btn button:hover{
  background: #ffd861;
  color: #fff;
}
.price_tag .premium ::selection,
.price_tag .premium .price-area,
.price_tag .premium .inner-area,
.price_tag .premium .btn button{
  background: #a26bfa;
}
.price_tag .premium .btn button:hover{
  background: #833af8;
}
.price_tag .ultimate ::selection,
.price_tag .ultimate .price-area,
.price_tag .ultimate .inner-area{
  background: #43ef8b;
}
.price_tag .ultimate .btn button{
  border: 2px solid #43ef8b;
  color: #43ef8b;
  background: #fff;
}
.price_tag .ultimate .btn button:hover{
  background: #43ef8b;
  color: #fff;
}
.price_tag .basic .package-name{
  background: #ffecb3;
}
.price_tag .premium .package-name{
  background: #d0b3ff;
}
.price_tag .ultimate .package-name{
  background: #baf8d4;
}
.price_tag .basic .package-name::before{
  content: "Basic";
}
.price_tag .premium .package-name::before{
  content: "Premium";
  font-size: 24px;
}
.price_tag .ultimate .package-name::before{
  
  font-size: 24px;
}
@media (max-width: 1020px) {
    .price_tag .wrapper .table{
    width: calc(50% - 20px);
    margin-bottom: 40px;
  }
}
@media (max-width: 698px) {
    .price_tag .wrapper .table{
    width: 100%;
  }
}
::selection{
  color: #fff;
}
.price_tag .table .ribbon{
  width: 150px;
  height: 150px;
  position: absolute;
  top: -10px;
  left: -10px;
  overflow: hidden;
}
.price_tag .table .ribbon::before,
.price_tag .table .ribbon::after{
  position: absolute;
  content: "";
  z-index: -1;
  display: block;
  border: 7px solid #4606ac;
  border-top-color: transparent;
  border-left-color: transparent;
}
.price_tag .table .ribbon::before{
  top: 0px;
  right: 15px;
}
.price_tag .table .ribbon::after{
  bottom: 15px;
  left: 0px;
}
.price_tag .table .ribbon span{
  position: absolute;
  top: 30px;
  right: 0;
  transform: rotate(-45deg);
  width: 200px;
  background: #a26bfa;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  font-size: 17px;
  text-transform: uppercase;
  box-shadow: 0 5px 10px rgba(0,0,0,0.12);
}
</style>
@section('body')
    <div class="header-section">
        <div class="first-child">
            <div class="overlay"></div>
            <div class="text">
                <span class="title"> <span style="color: aqua;">Welcome to Transcope Financing</span>
                    At Transcope Financing, we provide well-practiced and deft investing strategies with a
                    straightforward market approach to help our clients navigate through the market volatility and making
                    their welfare our prime concern. We have created a user-friendly and state-of-the-art interactive tools
                    that help you plan and implement a better financial strategy that best reaches your goals. From managing
                    casual day-to-day activities to more life-changing choices. Some people search for financial experts
                    looking for tinctures to ease their uncertainty. Transcope Financing is just the right place for
                    you, where the path to investing is not just promising, it’s better.</span>

            </div>
        </div>
        <div class="second-child">
            <div class="parent-child">
                <div class="empty"></div>
                <div class="text">
                    <span class="title">STRATEGY & PLANNING</span>
                    <h1>A customized path for your life</h1>
                </div>
            </div>
            <div class="parent-child2">
                <div class="text">

                    <span class="title">getting started</span>
                    <h1>Start to define your vision
                    </h1>
                    <button> <a href="{{ route('joinus') }}"> GET STARTED</a></button>
                </div>
            </div>
        </div>
    </div>


    <div class="service">
        <div class="over"></div>
        <h4>WHAT WE OFFER</h4>
        {{-- <div class="service-text">
        You are unique and you deserve a unique, fee-only solution.
    </div> --}}
        <div class="service-2">
            <p>
                We would be honored to learn more about your financial situation and discover the best way to tackle your
                financial crisis or meet your investment goals. With roots as an institutional fund, Transcope Financial
                Management provides the same institutional caliber expertise to individuals. This means every investor gets
                a disciplined investment strategy along with our unique, high-touch client service.
                We help individuals and families assess their unique personal situations, plan for the long term and invest
                to meet their goals. From financial planning to retirement plans through a tailored approach, we always put
                our client's needs first. <br> Our steady counsel helps clients stay on track, even when markets are choppy
                or life is unpredictable. We provide a tailored approach to investment management and financial planning
                that always puts clients first.
                This starts with a comprehensive assessment of every client's financial situation. We devote enough time to
                understand our client's personal financial condition, long-term goals, and investment objectives before
                making any recommendations. We utilize that information to craft a portfolio specifically for them. Over
                time, client's portfolio may change based on personal circumstances or our forward-looking views of the
                market. We offer a comprehensive set of financial planning, retirement planning, and portfolio management
                services.</p>
        </div>
        <div class="service-card">
            <div class="card">
                <h4>Portfolio Management</h4>
                <p>We don’t sell cookie-cutter portfolios. We take the time to understand your individual goals and needs
                    and build a tailored portfolio to help you meet your objectives. And we regularly check in on anything
                    that may have changed.</p>
                <a href="{{ route('portfoliomanagement') }}">Find out more</a>
            </div>
            <div class="card an">
                <h4>Retirement Planning </h4>
                <p>We take a comprehensive approach to retirement planning that will prioritize your goals and develop an
                    all-inclusive strategy to achieve those goals.</p><a href="{{ route('retirement') }}">Find out more</a>
            </div>

            <div class="card">
                <h4>Financial Planning </h4>
                <p>Women who are single, widowed, or divorced face the challenge of identifying the needs that must be
                    addressed today, while setting and working towards goals for tomorrow.</p><a
                    href="{{ route('finacialplaning') }}">Find out more</a>
            </div>

            <div class="card an">
                <h4>Tailored Investment Approach</h4>
                <p>We would help you meet your longer-term goals with a tailored investment strategy that’s specifically
                    designed for you because we believe an informed investor is a better investor and a happier client.</p>
                <a href="{{ route('tailoredinvestment') }}">Find out more</a>
            </div>

        </div>
    </div>
    <div class="nothing"></div>
    <div class="our-team-section">
        <div class="team-one">
            <h4>OUR TEAM</h4>
            <h3>A financial team that cares</h3>
            <p>Every member of our team focuses on making our clients and their families feel comfortable when discussing
                financial decisions that can potentially be stressful and could have a great impact on their lives.
            </p>
            {{-- <a href="{{ asset('assets/Transcopepdf.pdf') }}">Download brochure</a> --}}
           
            <button><a style="color: white;" href="{{ route('ourteam') }}"> Meet our financial team</a></button>
        </div>
        <div class="team-two">
            <!-- <object width="100%" height="300px" style="overflow: hidden" data="{{ asset('assets/Transcopepdf.pdf') }}"></object> -->
        </div>
    </div>


<section class="price_tag">
    <div class="wrapper">
    
  
        {{-- <div class="table basic">
          <div class="price-section">
            <div class="price-area">
              <div class="inner-area">
                <span class="text">$</span>
                <span class="price">29</span>
              </div>
            </div>
          </div>
          <div class="package-name"></div>
          <ul class="features">
            <li>
              <span class="list-name">One Selected Template</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">100% Responsive Design</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">Credit Remove Permission</span>
              <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
            <li>
              <span class="list-name">Lifetime Template Updates</span>
              <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
          </ul>
          <div class="btn"><button><a href="{{ route('joinus') }}"> GET STARTED</a></button></div>
        </div>
        <div class="table premium">
          <div class="ribbon"><span>Recommend</span></div>
          <div class="price-section">
            <div class="price-area">
              <div class="inner-area">
                <span class="text">$</span>
                <span class="price">59</span>
              </div>
            </div>
          </div>
          <div class="package-name"></div>
          <ul class="features">
            <li>
              <span class="list-name">Five Existing Templates</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">100% Responsive Design</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">Credit Remove Permission</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">Lifetime Template Updates</span>
              <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
          </ul>
          <div class="btn"><button>Purchase</button></div>
        </div> --}}
        @if ($investmentplans)
        @foreach ($investmentplans as $plan)
        <div class="table ultimate">
          <div class="price-section">
            <div class="price-area">
              <div class="inner-area">
                <span class="text">$</span>
                <span class="price">{{ $price->minimum }}</span>
              </div>
            </div>
          </div>
          <div class="package-name"> {{ $price->name }}</div>
          <ul class="features">
            <li>
              <span class="list-name"> {{ $price->noofrepeat }}+ Duration</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name"> Total profit of   {{ $price->percentage * $price->noofrepeat }}%</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">Referal Bonus of {{ $price->refpercent}}%</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
              <span class="list-name">Maximum of ${{ $price->maximum }}</span>
              <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
          </ul>
          <div class="btn"><button><a href="{{ route('joinus') }}"> GET STARTED</a></button></div>
        </div>
        @endforeach
      @endif
      </div>
</section>

    <div class="process-section">
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/eyes-2.svg" alt="">
            </div>
            <h3>Open and Honest Discussions</h3>
            <p>We take the time to understand your personal and financial circumstances as well as identify any goals you
                may have.</p>

        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon2-1.svg" alt="">
            </div>
            <h3>Creating a Financial Picture</h3>
            <p>Once we have gathered your information, we will integrate your financial pieces into a comprehensive plan
                that maximizes your potential for meeting your life goals.</p>

        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon3-1.svg" alt="">
            </div>
            <h3>Having a Plan in Place</h3>
            <p>We present the plan to you and go over each of our recommendations. Your feedback is encouraged, and we can
                make any changes to the plan, if needed.</p>
        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon4-1.svg" alt="">
            </div>
            <h3>Making your Goals a Reality</h3>
            <p>After making sure each piece of the plan is in place, we continue to monitor your progress. We will keep in
                touch with you on any significant life changes that may impact your financial plan.</p>
        </div>
    </div>
    
    <div class="expertise">
        <div class="fake"></div>
        <div class="text">
            <span>EXPERTISE & GUIDANCE</span>
            <p>Discover how we’ll clearly define your vision</p>
        </div>
        <!-- <video  controls id="vidmate">
            <source src="./assets/images/Transcope-vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> -->
    </div>
    <div class="people-state">
        <div class="people-state-kid mini">
            <div class="ani"></div>
            <h3>Our fee-only, non-commission approach means we have your best interests at heart.</h3>
        </div>
        <div class="people-state-kid">
            <h3>Certified Financial Planners</h3>
            <p>{{ $compd ? $compd->companyname : 'company name' }} employs only CERTIFIED FINANCIAL PLANNER™ certificants,
                which means we have the experience and knowledge to effectively plan your financial future.</p>

            <img src="./assets/images/FPA-logo.svg" alt="">
            <img src="./assets/images/napfa-logo.svg" alt="">

        </div>
    </div>



    <section class="people-say-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section header start -->
                    <div class="section-header wow bounceInLeft" data-wow-duration="2s">
                        <h2>What People <span>Say</span> </h2>
                        <p><img src="assets/images/logo/icon.png" alt="icon"></p>
                    </div>
                    <!-- section header end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="testimonial-area">
                        <div class="row">
                            <div class="col-lg-12  col-md-10 ">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
                                        <div class="testimonial-image-slider slider-nav text-center">

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes1.JPEG" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes2.JPEG" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tex3.JPEG" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes4.JPEG" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes5.JPEG" style="object-fit: cover;" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes6.JPEG" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/1627748086.jpg" alt="slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" id="row2">
                            <div class="col-md-12 ">
                                <div class="testimonial-text-slider slider-for text-center wow bounceInRight"
                                    data-wow-duration="2s">

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>C. Lovett</h4>

                                            <h6>WASHINGTON-DC</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                I have been an investor with
                                                {{ $compd ? $compd->companyname : 'company name' }} for about a year and nine
                                                months now. While it's too early to say how my investment will turn out in
                                                the long run, I will attest that I am impressed by the company's level of
                                                due diligence and its
                                                professionalism and open communication. All questions I've ever had, I've
                                                gotten answers to. I'm comforted by the fact
                                                {{ $compd ? $compd->companyname : 'company name' }} seems to put investors'
                                                interests first.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Gary Adamson</h4>

                                            <h6>Toronto,Canada</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                            <div>"Since investing with {{ $compd ? $compd->companyname : 'company name' }} we
                                                have worked together to get a clear understandable plan for our future which
                                                gives me confidence and security knowing what kind of lifestyle I can lead.
                                                In addition, we have seen gains in our portfolio in a short space of time
                                                which is a reassuring indicator. Our meetings are consultative and personal
                                                with all decisions made after full discussion and
                                                clear explanation.”</div>
                                            <div><br></div>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>James Anderson</h4>

                                            <h6>Florida</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                            <div>i have been with {{ $compd ? $compd->companyname : 'company name' }} for
                                                six years now and all i can say is that Transcope has a great client
                                                relationship and service which allows us to connect, confide and also
                                                collaborate in planning
                                                and managing our finances through our Joint investment account. It has been
                                                a great pleasure to work with
                                                {{ $compd ? $compd->companyname : 'company name' }} and i would gladly
                                                recommend them.</div>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Nettie B.Sarah</h4>

                                            <h6>Sweden</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                I have invested with {{ $compd ? $compd->companyname : 'company name' }}
                                                since 2009. They have proven to be knowledgeable and professional in all my
                                                dealings with them. The firm's disciplined approach, a keen eye for value,
                                                attention to detail, and superior execution place them
                                                at the top of my list. I have full confidence in their honesty and
                                                integrity, and I look forward to partnering with them again.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Charles S. Macaluso</h4>

                                            <h6>California</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                “Like many people, I spend the majority of my time planning for my business
                                                but pay little or no attention to my finances.
                                                {{ $compd ? $compd->companyname : 'company name' }} has developed a personal
                                                plan for me that allows me to take much greater control of my financial
                                                affairs,
                                                and plan for the future. Everything now makes much more sense, and I only
                                                wish I had got in touch with
                                                {{ $compd ? $compd->companyname : 'company name' }} sooner!”<br>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Chirag Beharry</h4>

                                            <h6>India</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                “Working with {{ $compd ? $compd->companyname : 'company name' }} has been
                                                like working with an extension of our family business. Their strong business
                                                ethics and integrity is top-notch and has made our working relationship very
                                                pleasurable and efficient.”<br>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Mary and William S.</h4>

                                            <h6>Brisbane,Australia</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                {{ $compd ? $compd->companyname : 'company name' }} guided me through the
                                                process of making a sound financial decision for our family. Most
                                                importantly, they took the time to make sure we understood every aspect of
                                                the transaction until we felt 100% comfortable.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- row -->
    </section>
    <!--  section -->
    <!--testimonial section start-->



    <!--Deopsit and Payouts section start-->
    <!--<section class="hosting-section hosting-section1  section-padding section-background">-->
    <!--      <div class="container">-->
    <!--                  <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!-- section header start -->
    <!--          <div class="section-header wow bounceInDown" data-wow-duration="3s">-->
    <!--            <h2>Latest <span> Deposits & Withdraw</span></h2>-->
    <!--             <p><img src="https://transcopefinancing.com/assets/images/logo/icon.png" alt="icon"></p>-->
    <!--          </div>-->
    <!-- section header end -->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="row">-->
    <!--        <div class="col-md-6">-->
    <!--              <div class="section-wrapper wow bounceInLeft" data-wow-duration="2s">-->
    <!--                 <div class="deposit-title text-center">-->
    <!--                        <h4>Latest Deposits</h4>-->
    <!--                    </div>-->
    <!--                <div class="hosting-content table-responsive">-->
    <!--                  <table>-->
    <!--                    <thead>-->
    <!--                      <tr>-->
    <!--                        <th>Name</th>-->
    <!--                        <th>Date</th>-->
    <!--                        <th>Currency</th>-->
    <!--                         <th>Amount</th>-->
    <!--                      </tr>-->

    <!--                    </thead>-->
    <!--                    <tbody>-->
    <!--                        -->
    <!--                            <tr>-->
    <!--                                <td>Noah lucas</td>-->
    <!--                                <td>Nov 03,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$2000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Rachnanohra</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$30000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$400000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$200000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$400000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Lucy Wesley</td>-->
    <!--                                <td>Oct 28,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$30000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                    </tbody>-->
    <!--                  </table>-->
    <!--                </div>-->
    <!-- hosting content end -->
    <!--              </div>-->
    <!--            </div>-->
    <!--                    <div class="col-md-6">-->
    <!--              <div class="section-wrapper wow bounceInRight" data-wow-duration="2s">-->
    <!--                  <div class="deposit-title text-center">-->
    <!--                        <h4>Latest Withdraw</h4>-->
    <!--                    </div>-->
    <!--                <div class="hosting-content table-responsive">-->
    <!--                  <table>-->
    <!--                    <thead>-->
    <!--                      <tr>-->
    <!--                         <th>Name</th>-->
    <!--                         <th>Date</th>-->
    <!--                         <th>Currency</th>-->
    <!--                         <th>Amount</th>-->
    <!--                      </tr>-->

    <!--                    </thead>-->
    <!--                    <tbody>-->
    <!--                      -->
    <!--                        <tr>-->
    <!--                            <td>Michael A. Lehr</td>-->
    <!--                            <td>Oct 12,2021</td>-->
    <!--                            <td><strong>USD</strong></td>-->
    <!--                            <td><strong>$500</strong></td>-->
    <!--                        </tr>-->
    <!--                      -->
    <!--                        <tr>-->
    <!--                            <td>franklin</td>-->
    <!--                            <td>Oct 12,2021</td>-->
    <!--                            <td><strong>USD</strong></td>-->
    <!--                            <td><strong>$500</strong></td>-->
    <!--                        </tr>-->
    <!--                      -->
    <!--                    </tbody>-->
    <!--                  </table>-->
    <!--                </div>-->
    <!-- hosting content end -->
    <!--              </div>-->
    <!--            </div>-->
    <!--        </div><!-- row -->
    <!--      </div><!-- container -->
    <!--    </section>-->
    <!--Deopsit and Payouts Section End-->
    </div>

    <!-- Online Section End -->

    {{-- <div class="clearfix"></div> --}}
@endsection
