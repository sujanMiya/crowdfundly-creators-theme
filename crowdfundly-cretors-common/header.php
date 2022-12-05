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
    <?php 
      $complete_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if( $complete_url == 'http://localhost:10038/crowdfundly/') {
       echo "hello";
      }
    ?>
  </head>

  <body data-rsssl=1 data-rsssl=1
    class=""
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