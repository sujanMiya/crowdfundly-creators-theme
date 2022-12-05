<?php
 /**
  * Template Name: crowdfundly creator2
  */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>crowdfundly creator</title>
    <meta name="description" content="&amp;lt;blockquote&amp;gt;&amp;lt;strong&amp;gt;&amp;lt;a href=&amp;quot;https://avada.theme-fusion.com/whats-new-in-7-8/...">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="turbo-visit-control" content="reload">
    <link href="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/css/output.css'); ?>" rel="stylesheet" />
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- font awesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
 <?php wp_head(); ?>
  </head>

  <body
    <?php body_class(); ?>
    style="
      background-image: url(<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-bg-image.svg'); ?>);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    "
  >
    <!-- navbar -->
    <div
      id="overlay"
      class="bg-white transition-all duration-500 ease-in-out overlay"
    ></div>
    <div class="container-fluid">
      <nav class="fixed z-10 w-full top-0 transition-all duration-1000 ease-in-out bg-white p-[1.5rem]"  style="box-shadow: 0px 4px 20px rgb(101 101 101 / 6%);">
        <div
          class="max-w-[114.6rem] mx-auto px-spacing16 bg-white"
        >
          <!-- navbar start-->
          <div class="flex justify-between items-center">
            <!-- logo start-->
            <div class="flex flex-col m-3">
              <div class="md:w-[180px] w-[100px] h-[43.18px] relative">
                <a href="index.html" class="flex items-center">
                  <img
                    width="35px"
                    height="auto"
                    class=""
                    src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/navbar/crowdfundly-header-logo.svg'); ?>"
                    alt="crowdfundly logo"
                  />
                  <img
                    width="126.85px"
                    height="auto"
                    class="ml-[0.659rem] lg:block hidden"
                    src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/navbar/crowdfundly-logo-text.svg'); ?>"
                    alt="crowdfundly logo text"
                  />
                </a>
              </div>
            </div>
            <!-- logo end-->
          <?php 
          // From URL to get webpage contents.
          $result = '';
          if(isset($_GET['username'])){
            $url = "https://api.crowdfundly.app/user-exists?username={$_GET['username']}";
            
            // Initialize a CURL session.
            $ch = curl_init();
            
            // Return Page contents.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            
            //grab URL and pass it to the variable.
            curl_setopt($ch, CURLOPT_URL, $url);
            
            $result = curl_exec($ch);
          }
         
          ?>
            <!-- nav start -->
            <div class="flex items-center flex-row">
              <div class="" id="myDIV">
                <ul
                  class="p-0 lg:flex lg:flex-row items-center nav-list flex-col lg:static absolute top-0 lg:w-auto w-[30rem] lg:h-auto h-screen lg:pl-0 pl-spacing10 lg:pt-[0.1rem] pt-spacing16 -left-[100%] transition-all duration-500 ease-in-out lg:leading-[0.1rem] leading-[5rem] lg:mt-[0.1rem] mt-spacing16"
                  id="navItem"
                >
                  <li class="lg:ml-[1.875rem] ml-0">
                    <a
                      href="#"
                      class="not-italic font-medium text-[1.6rem] leading-[2.2rem] text-light-gray tracking-[0.05em] font-openSans transition-all duration-300 capitalize hover:text-green btn active"
                    >
                      Home
                    </a>
                  </li>
                  <li class="lg:ml-[1.875rem] ml-0">
                    <a
                      href="#"
                      class="not-italic font-medium text-[1.6rem] leading-6 text-light-gray tracking-[0.01em] transition-all duration-300 font-openSans capitalize hover:text-green btn"
                    >
                      Feature
                    </a>
                  </li>
                  <li class="lg:ml-[1.875rem] ml-0">
                    <a
                      href="#"
                      class="not-italic font-medium text-[1.6rem] leading-[2.2rem] text-light-gray tracking-[0.05em] transition-all duration-300 font-openSans capitalize hover:text-green btn"
                    >
                      Pricing
                    </a>
                  </li>
                  <li class="lg:ml-[1.875rem] ml-0">
                    <a
                      href="#"
                      class="not-italic font-medium text-[1.6rem] leading-[2.2rem] text-light-gray tracking-[0.05em] font-openSans capitalize hover:text-green btn"
                    >
                      Resourses
                    </a>
                  </li>
                  <li class="lg:ml-[1.875rem] ml-0">
                    <a
                      href="https://crowdfundly.app/auth/login"
                      class="not-italic font-medium text-[1.6rem] leading-[2.2rem] text-light-gray tracking-[0.05em] font-openSans capitalize hover:text-green btn"
                    >
                      Login
                    </a>
                  </li>
                  <div class="lg:ml-[1.875rem]">
                    <a href="https://crowdfundly.app/auth" class="">
                      <button
                        class="lg:w-[14rem] w-full h-[5.5rem] bg-primary not-italic font-semibold font-rubik text-[1.6rem] text-white leading-[1rem] tracking-[0.05em] btn-hover lg:rounded-full rounded-lg"
                      >
                        Sign Up
                      </button>
                    </a>
                  </div>
                </ul>
              </div>
              <!-- nav end -->

              <div class="lg:hidden block ml-6 cursor-pointer" id="humberMenu">
                <div class="h-[0.2rem] w-[2rem] bg-black span"></div>
                <div
                  class="h-[0.2rem] w-[2rem] mt-[0.3rem] span bg-black"
                ></div>
                <div
                  class="h-[0.2rem] w-[2rem] mt-[0.3rem] span bg-black"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- overview feature -->
    <div
      class="container-fluid 2xl:pt-[18.45rem] xl:pt-[15.45rem] md:pt-[13.45rem] sm:pt-[10.45rem] pt-[8.45rem]"
    >
      <div class="container">
      <?php the_content(); ?>
    </div>
    </div>
    


    <div class="container-fluid bg-[#FFFAF4] ">
            <div class="container">
                <div class="py-[6.25rem]">
                    <div class="2xl:grid 2xl:grid-cols-4 lg:grid lg:grid-cols-4 lg:pt-0 pt-[3rem] md:grid md:grid-cols-2 sm:grid sm:grid-cols-2 gap-[3.375rem]">
                        
                        <div class="">
                            <div class="">
                                <a href="index.html" class="">
                                  <div class="md:w-[180px] w-[100px] h-[43.18px] relative">
                                    <a href="index.html" class="flex items-center">
                                      <img
                                        width="35px"
                                        height="auto"
                                        class=""
                                        src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/navbar/crowdfundly-header-logo.svg'); ?>"
                                        alt="crowdfundly logo"
                                      />
                                      <img
                                        width="126.85px"
                                        height="auto"
                                        class="ml-[0.659rem] lg:block hidden"
                                        src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/navbar/crowdfundly-logo-text.svg'); ?>"
                                        alt="crowdfundly logo text"
                                      />
                                    </a>
                                  </div>
                                </a>
                                <p class="break-all title mt-spacing20">
                                  Crowdfundly is a digital fundraising 
                                  solution for all fundraising needs. A 
                                  powerful tool for campaigns, 
                                </p>

                                <div class="space-x-[0.8rem] mt-spacing24 flex items-center">
                                    <a href="#" class="hover:-translate-y-[0.2rem] transition-all duration-300 " style="display: inline-block;">
                                        <div class="w-[2.6rem] h-[2.6rem] rounded-[0.8rem] border-2 border-[#434B57] flex justify-center items-center">
                                          <img
                                          width="auto"
                                          height="auto"
                                          class="mt-[0.8rem]"
                                          src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-facebook-social-logo.svg'); ?>"
                                          alt="crowdfundly facebook logo"
                                        />
                                        </div>
                                    </a>
                                    <a href="#" class="hover:-translate-y-[0.2rem] transition-all duration-300 " style="display: inline-block;">
                                      <div class="w-[2.6rem] h-[2.6rem] rounded-[0.8rem] border-2 border-[#434B57] flex justify-center items-center">
                                        <img
                                        width="auto"
                                        height="auto"
                                        class=" "
                                        src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-twitter-social-logo.svg'); ?>"
                                        alt="crowdfundly facebook logo"
                                      />
                                      </div>
                                  </a>
                                  <a href="#" class="hover:-translate-y-[0.2rem] transition-all duration-300 " style="display: inline-block;">
                                    <div class="w-[2.6rem] h-[2.6rem] rounded-[0.8rem] border-2 border-[#434B57] flex justify-center items-center">
                                      <img
                                      width="auto"
                                      height="auto"
                                      class=""
                                      src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-youtube-social-logo.svg'); ?>"
                                      alt="crowdfundly facebook logo"
                                    />
                                    </div>
                                </a>
                                <a href="#" class="hover:-translate-y-[0.2rem] transition-all duration-300 " style="display: inline-block;">
                                  <div class="w-[2.6rem] h-[2.6rem] rounded-[0.8rem] border-2 border-[#434B57] flex justify-center items-center">
                                    <img
                                    width="auto"
                                    height="auto"
                                    class=""
                                    src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-discord-social-logo.svg'); ?>"
                                    alt="crowdfundly facebook logo"
                                  />
                                  </div>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <h1 class="not-italic font-extrabold text-[2rem] text-black leading-[2.7rem] flex items-center tracking-[0.015em] font-nunito">
                                  Important Links
                                </h1>
                                <ul class="space-y-[0.9375rem] mt-[1.75rem]">
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Features
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Documentation
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="pricing.html" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Affiliate
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Changelogs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Support
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class=""   >
                                <h1 class="not-italic font-extrabold text-[2rem] text-black leading-[2.7rem] flex items-center text-white tracking-[0.015em] font-nunito">
                                  Legal
                                </h1>
                                <ul class="space-y-[0.9375rem] mt-[1.75rem]">
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Terms of Service
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Privacy Policy
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="not-italic font-normal text-[2rem] leading-[2.8rem] text-[#434B57] tracking-[0.015em] font-nunito hover:transition-all duration-300 hover:text-primary transition-all">
                                          Refund Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class=""   >
                                <h1 class="not-italic font-extrabold text-[2rem] text-black leading-[2.7rem] flex items-center text-white tracking-[0.015em] font-nunito">
                                  Contact Us
                                </h1>
                                <ul class=" mt-[1.75rem] space-y-spacing10">
                                    <li class="">
                                        <a class="title break-words" href="#">support@crowdfundly.com</a>
                                    </li>
                                    <li class="">
                                        <a class="title break-words" href="#">Official Facebook Community</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </div>
 
<script>
  const accrodHeaders = document.querySelectorAll('.accord-header');
accrodHeaders.forEach((ach) => {
  ach.addEventListener('click', toggelItem, false);
});

function toggelItem() {
  const currentContentEle = this.nextElementSibling;

  const isCollapsed = currentContentEle.classList.contains('collapse');

  accrodHeaders.forEach((ach) => {
    const contentEle = ach.nextElementSibling;
    if (!contentEle.classList.contains('collapse')) {
      contentEle.classList.add('collapse');
    }
  });

  if (isCollapsed) {
    currentContentEle.classList.remove('collapse');
  }
}


</script>
 <script>
  // tabs

  let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function (toggler) {
            toggler.addEventListener("click", function (e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {
                    tabTogglers[i].parentElement.classList.remove("bg-[#F0E9FF]", "text-[#131313]");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");
                }
                e.target.parentElement.classList.add("bg-[#F0E9FF]", "text-[#131313]");
            });
        });
</script>
<script>
    //   navbar scroll Animation

  const nav = document.querySelector('nav')
  const navHeight = 70
  // the point the scroll starts from (in px)
  let lastScrollY = 0
  // how far to scroll (in px) before triggering
  const delta = 10

  // function to run on scrolling
  function scrolled() {
    let sy = window.scrollY
    // only trigger if scrolled more than delta
    if (Math.abs(lastScrollY - sy) > delta) {
      // scroll down -> hide nav bar
      if (sy > lastScrollY && sy > navHeight) {
        nav.classList.add('nav-up')
      }
      // scroll up -> show nav bar
      else if (sy < lastScrollY) {
        nav.classList.remove('nav-up')
      }
      // update current scroll point
      lastScrollY = sy
    }
  }

  // Add event listener & debounce so not constantly checking for scroll
  let didScroll = false
  window.addEventListener('scroll', function (e) {
    didScroll = true
  })

  setInterval(function () {
    if (didScroll) {
      scrolled()
      didScroll = false
    }
  }, 0) 
</script>
<script>
  function myFunction(id) {
    document.querySelector(`#${id}`).scrollIntoView()
  }
  // navbar
  var navItem = document.getElementById('navItem')
  var humberMenu = document.getElementById('humberMenu')
  var overlay = document.getElementById('overlay')
  var span = document.getElementsByClassName('.span')
  const body = document.querySelector('body')

  humberMenu.addEventListener('click', function () {
    body.classList.add('disabled-scroll')
    navItem.classList.add('addClass')
    overlay.classList.add('is-active')
    span.classList.add('humberIconStyles')
  })

  overlay.addEventListener('click', function () {
    navItem.classList.remove('addClass')
    overlay.classList.remove('is-active')
    body.classList.remove('disabled-scroll')
  })

  // active menu
  var header = document.getElementById('myDIV')
  var btn = header.getElementsByClassName('btn')
  for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function () {
      var current = document.getElementsByClassName('active')
      current[0].className = current[0].className.replace(' active', '')
      this.className += ' active'
    })
  }

</script>
<script src="app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
loop:true,
margin:30,
dots:true,
responsive:{
    0:{
        items:1,
dots:true,
    },
    600:{
        items:2,
dots:true,
    },
    1000:{
        items:4,
dots:true,
    }
}
})
</script>
  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
     <?php wp_footer(); ?>
  </body>
</html>
