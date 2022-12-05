<?php
 /**
  * Template Name: crowdfundly creator test
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
 
  </head>

  <body
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
    <!-- overview feature -->
         <!-- overview feature -->
    <div
      class="container-fluid 2xl:pt-[18.45rem] xl:pt-[15.45rem] md:pt-[13.45rem] sm:pt-[10.45rem] pt-[8.45rem]"
    >
      <div class="container">
        <div class="">
          <h1
            class="heading-extra-large text-center w-full max-w-[82rem] mx-auto"
          >
            Make it easy for your fans to support you
          </h1>
          <p
            class="title w-full max-w-[65.5rem] mx-auto text-center mt-spacing26"
          >
            Exclusive solution for creators to receive donations, recurring
            supports via membership and sell anything to the fans
          </p>
          <form action="" method="get">
          <div class="mt-spacing36">
            <div
              class="max-w-[56.7rem] mx-auto w-full h-[7.6rem rounded-full border border-red border-extraLightGray p-[0.8rem] pl-spacing16 bg-white relative"
            >
              <div class="flex mt-space12 bg-lightblue items-center">
                <span
                  class="not-italic font-bold font-rubik md:text-[2rem] text-[1.3rem] leading-[2.4rem] text-[#404040] tracking-[0.015em] btn-hover lg:rounded-full rounded-lg mr-[0.2rem]"
                >
                  crowdfundly.com/
                </span>
                <input
                  name="username" autofocus
                  placeholder="yourname"
                  type="text"
                  class="bg-gray-50 rounded-r-full text-[#404040] font-bold font-rubik leading-[2.4rem] outline-none block flex-1 w-full md:text-[2rem] text-[1.3rem] p-2.5"
                  required
                  />
                <span class="inline-flex items-center">
                  <div class="">
                    <button
                    type="submit"
                      class="md:w-[20.3rem] w-[12.3rem] h-[5.5rem] bg-primary not-italic font-medium font-rubik md:text-[2rem] text-[1.3rem] text-white leading-[2.4rem] tracking-[0.015em] btn-hover rounded-full"
                    >
                      Create my page
                    </button>
                  </div>
                </span>
              </div>
              <?php
                $user_name_value = json_decode($result, true);
                if($user_name_value['username'] == true) : ?>
                <style>
                    input[type="text"] {
                        color: #a5a5a5 !important;
                    }
                    .border-red{
                        border: 1px solid #FF5F74;
                    }
                </style>
              <div class="flex items-center absolute text-[1.5rem] font-nunito gap-[.8rem]" style="position: absolute; left: 2rem; bottom: -2.8rem;">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_6399_51304)">
                  <circle cx="7" cy="7" r="7" fill="#FF5F74"/>
                  <path d="M7.00671 9.10306C6.83669 9.10306 6.70246 9.04735 6.60403 8.93593C6.51454 8.82451 6.46085 8.66667 6.44295 8.4624L6.04027 3.14206C6.01342 2.79851 6.08501 2.52461 6.25503 2.32033C6.42506 2.10678 6.67562 2 7.00671 2C7.32886 2 7.57047 2.10678 7.73154 2.32033C7.90157 2.52461 7.97315 2.79851 7.94631 3.14206L7.54362 8.4624C7.53468 8.66667 7.48098 8.82451 7.38255 8.93593C7.29306 9.04735 7.16779 9.10306 7.00671 9.10306ZM7.00671 12C6.70246 12 6.45638 11.9025 6.26846 11.7075C6.08949 11.5125 6 11.2618 6 10.9554C6 10.6583 6.08949 10.4169 6.26846 10.2312C6.45638 10.0362 6.70246 9.93872 7.00671 9.93872C7.31991 9.93872 7.56152 10.0362 7.73154 10.2312C7.91051 10.4169 8 10.6583 8 10.9554C8 11.2618 7.91051 11.5125 7.73154 11.7075C7.56152 11.9025 7.31991 12 7.00671 12Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_6399_51304">
                  <rect width="14" height="14" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>
                  
                <p class="text-[#FF5F74]">Username not available</p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          </form>
          <p
            class="font-nunito font-normal tracking-[0.015em] leading-[2.4rem] text-lightGray w-full max-w-[65.5rem] mx-auto text-center mt-spacing40 text-[1.8rem]"
          >
            Free Forever. No credit card required
          </p>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/banner/crowdfundly-hero.svg'); ?>" alt="crowdfundly hero image">
        </div>
        <div
          class="2xl:py-[12rem] xl:py-[12rem] lg:py-[8rem] md:py-[6rem] py-[4rem]"
        >
          <h2 class="heading-large text-center w-full max-w-[70.6rem] mx-auto">
            It's an all in one solution for Creators
          </h2>
          <p
            class="title w-full max-w-[73.3rem] mx-auto text-center mt-[2.2rem]"
          >
            Receive donations within a minute. Create memberships program and
            sell your digital or tangible creations on Crowdfundly Shop to grow
            your income.
          </p>
          <div class="lg:ml-[1.875rem] mt-[3.65rem]">
            <a href="#" class="">
              <button
                class="w-[26rem] flex justify-center items-center mx-auto h-[5.5rem] bg-primary not-italic font-semibold font-rubik text-[1.6rem] text-white leading-[1rem] tracking-[0.05em] btn-hover rounded-full"
              >
                Get Started - It’s free
              </button>
            </a>
          </div>
          <img class="w-full max-w-[96%]   " src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/banner/crowdfundly-banner-image.svg'); ?>" alt="crowdfundly overview feature image">
        </div>
        <!-- <div>
            <div class="container-fluid">
                <div class="container">
                    <div class="">
                        <div class="relative">
                            <div class="2xl:pb-[10rem] xl:pb-[10rem] lg:pb-[8rem] md:pb-[6rem] pb-[4rem]">
                                <div class="w-full mx-auto mt-4">
                                    
                                    <div class="">
                                      <h2 class="heading-large text-center w-full max-w-[86.1rem] mx-auto pb-[3.2rem]">
                                        Give your Audience a Whole new Experience
                                      </h2>
                                        <div class="mb-spacing30 flex justify-center">
                                         
                                            <ul id="tabs" class="pt-2 px-1 tab-button 2xl:grid 2xl:grid-cols-7 xl:grid xl:grid-cols-7 lg:grid lg:grid-cols-7 md:grid md:grid-cols-7 sm:grid sm:grid-cols-3 grid grid-cols-2 justify-center gap-[1.8rem]" style="padding: 20px; border-radius: 10px 3px 3px 10px;">
                                             
                                                
                                                <li onclick="myFunction('first')" class="bg-[#F0E9FF] md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center h-[5rem]">
                                                    <a id="default-tab" href="#first" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope text-center">
                                                        Creators
                                                    </a>
                                                </li>
                                                <li onclick="myFunction('two')" class=" md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#two" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Artists</a>
                                                </li>
                                                <li onclick="myFunction('three')" class="md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#three" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Podcasters</a>
                                                </li>
                                                <li onclick="myFunction('four')" class=" md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#four" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Developers</a>
                                                </li>
                                                <li onclick="myFunction('five')" class="md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#five" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Musicians</a>
                                                </li>
                                                <li onclick="myFunction('six')" class="md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#six" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Writers</a>
                                                </li>
                                                <li onclick="myFunction('seven')" class="md:min-w-[10rem] min-w-[8rem] w-full md:rounded-full rounded-[1rem] flex justify-center items-center md:h-[5rem] h-[4rem]">
                                                    <a href="#seven" class="not-italic font-medium sm:text-[1.6rem] text-[1.3rem] leading-7 text-gray-900 font-manrope">Community</a>
                                                </li>
                                            </ul>
                                        </div>
    
                                        <div" id="tab-contents" class="lg:mt-0 mt-16 ">
                                            <div id="first" class="">
                                              <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                  <div class="card-wrapper">
                                                    <div class="relative">
                                                      <img class="card-banner-img" src="/images/home/crowdfundly-card-02.svg" alt="crowdfundly card image">
                                                      <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                                    </div>
                                                    <div class="card-detils ">
                                                      <span class="card-user-name ">Floyd Miles</span>
                                                      <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                                      <div class="mt-[1.4rem]">
                                                        <span class="card-info">
                                                          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <p class="card-status">45 Supporters</p>
                                                        </span>
                                                      </div>    
                                                   </div>
                                                </div>  
                                            </div>
                                              
                                             <div class="item">
                                              <div class="card-wrapper">
                                                <div class="relative">
                                                  <img class="card-banner-img" src="/images/Rectangle 78 (1).svg" alt="crowdfundly card image">
                                                  <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                                </div>
                                                <div class="card-detils ">
                                                  <span class="card-user-name ">Floyd Miles</span>
                                                  <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                                  <div class="mt-[1.4rem]">
                                                    <span class="card-info">
                                                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <p class="card-status">45 Supporters</p>
                                                    </span>
                                                  </div>    
                                               </div>
                                            </div>  
                                        </div>
                                          
                                         <div class="item">
                                          <div class="card-wrapper">
                                            <div class="relative">
                                              <img class="card-banner-img" src="/images/Rectangle 78 (2).svg" alt="crowdfundly card image">
                                              <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                            </div>
                                            <div class="card-detils ">
                                              <span class="card-user-name ">Floyd Miles</span>
                                              <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                              <div class="mt-[1.4rem]">
                                                <span class="card-info">
                                                  <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <p class="card-status">45 Supporters</p>
                                                </span>
                                              </div>    
                                           </div>
                                        </div>  
                                    </div>
                                      
                                     <div class="item">
                                      <div class="card-wrapper">
                                        <div class="relative">
                                          <img class="card-banner-img" src="/images/Rectangle 78.svg" alt="crowdfundly card image">
                                          <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                        </div>
                                        <div class="card-detils ">
                                          <span class="card-user-name ">Floyd Miles</span>
                                          <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                          <div class="mt-[1.4rem]">
                                            <span class="card-info">
                                              <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <p class="card-status">45 Supporters</p>
                                            </span>
                                          </div>    
                                       </div>
                                    </div>  
                                </div>
                                  
                                 <div class="item">
                                  <div class="card-wrapper">
                                    <div class="relative">
                                      <img class="card-banner-img" src="/images/home/crowdfundly-card-02.svg" alt="crowdfundly card image">
                                      <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                    </div>
                                    <div class="card-detils ">
                                      <span class="card-user-name ">Floyd Miles</span>
                                      <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                      <div class="mt-[1.4rem]">
                                        <span class="card-info">
                                          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <p class="card-status">45 Supporters</p>
                                        </span>
                                      </div>    
                                   </div>
                                </div>  
                            </div>
                              
                             <div class="item">
                              <div class="card-wrapper">
                                <div class="relative">
                                  <img class="card-banner-img" src="/images/home/crowdfundly-card-02.svg" alt="crowdfundly card image">
                                  <img class="card-user-img" src="https://img.freepik.com/free-psd/white-t-shirt-with-silkscreen-mockup_125540-697.jpg?size=626&ext=jpg&ga=GA1.2.2125964834.1665828857" alt="crowdfundly card image">
                                </div>
                                <div class="card-detils ">
                                  <span class="card-user-name ">Floyd Miles</span>
                                  <p class="card-desc">Consectetuer adipiscing elit. Phasellus hendrerit</p>   
                                  <div class="mt-[1.4rem]">
                                    <span class="card-info">
                                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.31309 8.4927C0.409366 5.67119 1.46635 2.16325 4.42851 1.20984C5.98665 0.70702 7.90953 1.12646 9.00191 2.63323C10.032 1.07087 12.0104 0.710389 13.5668 1.20984C16.5281 2.16325 17.591 5.67119 16.6882 8.4927C15.2816 12.965 10.3739 15.2946 9.00191 15.2946C7.63074 15.2946 2.76679 13.0172 1.31309 8.4927Z" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.1494 4.38086C13.166 4.4853 13.8019 5.29132 13.764 6.42076" stroke="#6A24FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <p class="card-status">45 Supporters</p>
                                    </span>
                                  </div>    
                               </div>
                            </div>  
                        </div>

                                            </div>
                                            </div>
                                            <div id="two" class="hidden">
                                               another tab
                                            </div>
                                            <div id="three" class="hidden">
                                                  <p>content two</p>
                                            </div>
                                            <div id="four" class="hidden">
                                                  <p>content three</p>
                                            </div>
                                            <div id="five" class="hidden">
                                                  <p>content four</p>
                                            </div>
                                            <div id="six" class="hidden">
                                                  <p>content five</p>
                                            </div>
                                            <div id="seven" class="hidden">
                                                  <p>content five</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
      </div>
    </div>

    <!-- donations feature -->
    <div class="container-fluid">
      <div class="container">
        <!-- <div class="rounded-[2rem]">
          <div class="px-spacing20 py-[6.7rem]" style="background: linear-gradient(94.73deg, #EFF9FF 1.96%, rgba(252, 245, 255, 0.58) 91.67%);
          border: 4px solid rgba(255, 255, 255, 0.4);
          box-shadow: 0px 17px 30px 12px rgba(43, 79, 139, 0.03);
          border-radius: 20px;">
            <div class="rounded-[2rem]">
                <h2 class="heading-large text-center w-full max-w-[72.6rem] mx-auto">
                  Everything is located in a single place
                </h2>
                <p
                  class="title w-full max-w-[59.2rem] mx-auto text-center mt-[2.2rem]"
                >
                Accept donations in 60 seconds. If you sell memberships or sell 
                services in your crowdfundly Shop, you can make more money. 
                Do it all from your crowdfundly page.
                </p>
                <div class="mt-spacing36">
                  <div
                    class="max-w-[56.7rem] mx-auto w-full h-[7.6rem rounded-full border border-extraLightGray p-[0.8rem] pl-spacing16 bg-white relative"
                  >
                    <div class="flex mt-space12 bg-lightblue items-center">
                      <span
                        class="not-italic font-bold font-rubik md:text-[2rem] text-[1.3rem] leading-[2.4rem] text-[#404040] tracking-[0.015em] btn-hover lg:rounded-full rounded-lg mr-[0.2rem]"
                      >
                        crowdfundly.com/
                      </span>
                      <input
                      name="fname" autofocus
                        placeholder="yourname"
                        type="text"
                        class="bg-gray-50 rounded-r-full text-[#404040] font-bold font-rubik leading-[2.4rem] outline-none block flex-1 w-full md:text-[2rem] text-[1.3rem] p-2.5"
                      />
                      <span class="inline-flex items-center">
                        <div class="">
                          <button
                            class="md:w-[20.3rem] w-[12.3rem] h-[5.5rem] bg-primary not-italic font-medium font-rubik md:text-[2rem] text-[1.3rem] text-white leading-[2.4rem] tracking-[0.015em] btn-hover rounded-full"
                          >
                            Create my page
                          </button>
                        </div>
                      </span>
                    </div>
                    <div class="flex items-center absolute text-[1.5rem] font-nunito gap-[.8rem]" style="position: absolute; left: 2rem; bottom: -2.8rem;">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6399_51304)">
                        <circle cx="7" cy="7" r="7" fill="#FF5F74"/>
                        <path d="M7.00671 9.10306C6.83669 9.10306 6.70246 9.04735 6.60403 8.93593C6.51454 8.82451 6.46085 8.66667 6.44295 8.4624L6.04027 3.14206C6.01342 2.79851 6.08501 2.52461 6.25503 2.32033C6.42506 2.10678 6.67562 2 7.00671 2C7.32886 2 7.57047 2.10678 7.73154 2.32033C7.90157 2.52461 7.97315 2.79851 7.94631 3.14206L7.54362 8.4624C7.53468 8.66667 7.48098 8.82451 7.38255 8.93593C7.29306 9.04735 7.16779 9.10306 7.00671 9.10306ZM7.00671 12C6.70246 12 6.45638 11.9025 6.26846 11.7075C6.08949 11.5125 6 11.2618 6 10.9554C6 10.6583 6.08949 10.4169 6.26846 10.2312C6.45638 10.0362 6.70246 9.93872 7.00671 9.93872C7.31991 9.93872 7.56152 10.0362 7.73154 10.2312C7.91051 10.4169 8 10.6583 8 10.9554C8 11.2618 7.91051 11.5125 7.73154 11.7075C7.56152 11.9025 7.31991 12 7.00671 12Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_6399_51304">
                        <rect width="14" height="14" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                      <p class="text-[#FF5F74]">Username not available</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div> -->
        <!-- all feature -->
        <div class="">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div>
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Receive support
                </h2>
                <p
                  class="title w-full font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                You can receive donations and words of encouragement from your supporters. We make it easy for them.
                </p>
                <p
                  class="title w-full  font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                And words of encouragement from your supporters. We make it easy for them.
                </p>
              </div>
            </div>
            <div>
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Recive Support.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>


        <div class="pt-[1rem]">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div class="order-last">
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Sell what You Love to Create
                </h2>
                <p
                  class="title w-full font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Fans can purchase your content, artworks or anything creativities. No setup cost or listing fees involved.
                </p>
                <p
                  class="title w-full  font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Tempus commodo aliquam et tincidunt sed euismod consequat vitae.
                </p>
              </div>
            </div>
            <div class="order-first">
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto   " src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Sell card.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>



        <div class="   ">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div>
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Recurring Revenue from 
Membership
                </h2>
                <p
                  class="title w-full font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Earn recurring revenue by creating a membership program for your loyal supporters and let them contribute regularly at varying levels.
                </p>
                <p
                  class="title w-full  font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Earn recurring revenue by creating a membership program for your loyal supporters and let them contribute regularly at varying levels.

Faucibus mauris mauris sit nisl, nunc, quis. Nibh consequat aliquam nunc ut felis odio.
                </p>
                <div class="mt-spacing40">
                  <a href="#" class="">
                    <button
                      class="w-[16.7rem] flex justify-center items-center h-[5.5rem] bg-primary not-italic font-semibold font-rubik text-[1.6rem] text-white leading-[1rem] tracking-[0.05em] btn-hover rounded-full"
                    >
                    Get started
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div>
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto   " src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Membership.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>

        <div class="">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div class="order-last">
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Stay Connected 
with Fans
                </h2>
                <p
                  class="title w-full font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Crowdfundly's innovative "Broadcast" feature allows you to maintain a stronger relationship with your audience and supporters. 
                </p>
                <p
                  class="title w-full  font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Crowdfundly's innovative "Broadcast" feature allows you to maintain a stronger relationship with your audience and supporters. 

Faucibus mauris mauris sit nisl, nunc, quis. consequat aliquam nunc ut felis odio.
                </p>
              </div>
            </div>
            <div class="order-first">
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto   " src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Stay Connected.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>

        <div class="   ">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div>
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Showcase Your Exclusive 
Content
                </h2>
                <p
                  class="title w-full font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Take advantage of Crowdfundly's dedicated space to showcase your unique, innovative and special creations.
                </p>
                <p
                  class="title w-full  font-normal max-w-[59.2rem] text-left mt-[2.2rem]"
                >
                Vestibulum in dis ipsum eget. Et ullamcorper massa pretium ornare sit.
                </p>
                <div class="mt-spacing40">
                  <a href="#" class="">
                    <button
                      class="w-[16.7rem] flex justify-center items-center h-[5.5rem] bg-primary not-italic font-semibold font-rubik text-[1.6rem] text-white leading-[1rem] tracking-[0.05em] btn-hover rounded-full"
                    >
                    Get started
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="relative w-full max-w-[58.5rem] max-h-[70rem] h-auto">
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto   " src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Group 47376.svg'); ?>" alt="crowdfundly overview feature image"/>
              <div class="md:block hidden" style="position:absolute; top: 0; right: 0;">
                <svg width="244" height="220" viewBox="0 0 244 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_5578_49302)">
                  <path d="M118.346 139.568C117.123 138.572 116.48 136.86 117.269 135.128C122.449 123.733 128.531 112.789 134.989 102.076C141.162 91.8819 147.157 80.5721 154.766 71.3655C156.593 69.1301 158.607 66.8714 161.223 65.6064C164.321 64.1192 168.049 63.7473 171.423 64.2314C175.267 64.7968 178.301 66.7342 180.081 70.2559C181.897 73.8337 182.98 78.2075 181.549 82.107C180.655 84.5708 178.977 86.6208 177.345 88.5955C168.936 98.7642 159.815 108.287 150.109 117.242C145.164 121.784 140.099 126.183 134.915 130.439C131.829 132.974 128.549 135.319 125.599 137.972C124.536 138.911 123.407 139.844 122.031 140.278C120.645 140.672 119.323 140.343 118.346 139.568Z" fill="#FFCC24"/>
                  <path d="M79.9481 126.069C79.3569 125.567 78.8489 124.873 78.4722 124.19C76.0577 119.897 75.868 114.411 74.9108 109.664C73.8108 104.136 72.995 98.5412 72.0013 93.0099C70.7569 85.9729 69.5375 78.9514 68.2931 71.9145C67.2068 65.6332 65.4655 59.1218 65.4481 52.7365C65.4301 48.1524 66.4809 43.4642 69.2398 39.8279C73.7812 33.8594 81.7437 33.0809 87.8746 37.1335C93.7196 40.9752 94.5426 48.5841 94.0692 54.9789C93.1728 66.8989 92.5548 78.8171 91.3454 90.6829C90.7969 96.1307 90.0667 101.536 89.2553 106.961C88.4866 112.203 88.0869 117.466 86.4698 122.567C85.4736 125.592 83.1864 128.687 79.9481 126.069Z" fill="#FFCC24"/>
                  <path d="M136.693 166.95C136.202 166.059 136.12 164.899 136.599 163.67C138.034 159.877 142.099 157.946 145.261 155.736C156.243 148.086 167.702 140.28 179.515 133.697C185.295 130.5 198.788 124.847 202.568 133.619C203.39 135.546 203.355 137.741 202.83 139.774C200.464 149.299 188.566 153.543 180.556 157.099C167.817 162.765 154.224 167.005 140.322 168.596C138.66 168.819 137.332 168.106 136.693 166.95Z" fill="#FFCC24"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_5578_49302">
                  <rect width="205.348" height="131.864" fill="white" transform="translate(69.1426) rotate(31.6243)"/>
                  </clipPath>
                  </defs>
                  </svg>
              </div>
                
            </div>
          </div>
        </div>


        <div>
          <h2 class="heading-large text-center mb-[5rem] w-full max-w-[72.6rem] mx-auto">
            Frequently asked questions
          </h2>
          <div class="accordion-container space-y-spacing12 ">
            <div class="accord-item bg-white " style="background: #FFFFFF;
            border: 1px solid #F2F2F2;
            box-shadow: 0px 2px 5px rgba(21, 19, 43, 0.05);
            border-radius: 37px;
            border-top: transparent;">
              <div class="accord-header">
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] text-[#66667D] border border-[#F2F2F2] rounded-full leading-[2.7rem] tracking-[0.0015em]w-full relative h-[6rem] flex justify-start items-center px-spacing30" style="width:100%;">Active campaigns - what does it mean?</div> 
              </div>
              <div class="accord-content collapse show">
                <div class="accord-body">
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                </div>
              </div>
            </div>

            <div class="accord-item bg-white " style="background: #FFFFFF;
            border: 1px solid #F2F2F2;
            box-shadow: 0px 2px 5px rgba(21, 19, 43, 0.05);
            border-radius: 37px;
            border-top: transparent;">
              <div class="accord-header">
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] leading-[2.7rem] tracking-[0.0015em] text-[#66667D] border border-[#F2F2F2] w-full h-[6rem] flex justify-start items-center px-spacing30 rounded-full">Active campaigns - what does it mean?</div>
              </div>
              <div class="accord-content collapse">
                <div class="accord-body">
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                </div>
              </div>
            </div>

            <div class="accord-item bg-white " style="background: #FFFFFF;
            border: 1px solid #F2F2F2;
            box-shadow: 0px 2px 5px rgba(21, 19, 43, 0.05);
            border-radius: 37px;
            border-top: transparent;">
              <div class="accord-header">
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] leading-[2.7rem] tracking-[0.0015em] text-[#66667D] border border-[#F2F2F2] w-full h-[6rem] flex justify-start items-center px-spacing30 rounded-full">Active campaigns - what does it mean?</div>
              </div>
              <div class="accord-content collapse">
                <div class="accord-body">
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                </div>
              </div>
            </div>

            <div class="accord-item bg-white " style="background: #FFFFFF;
            border: 1px solid #F2F2F2;
            box-shadow: 0px 2px 5px rgba(21, 19, 43, 0.05);
            border-radius: 37px;
            border-top: transparent;">
              <div class="accord-header">
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] leading-[2.7rem] tracking-[0.0015em] text-[#66667D] border border-[#F2F2F2] w-full h-[6rem] flex justify-start items-center px-spacing30 rounded-full">Active campaigns - what does it mean?</div>
              </div>
              <div class="accord-content collapse">
                <div class="accord-body">
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                </div>
              </div>
            </div>
            <div class="accord-item bg-white " style="background: #FFFFFF;
            border: 1px solid #F2F2F2;
            box-shadow: 0px 2px 5px rgba(21, 19, 43, 0.05);
            border-radius: 37px;
            border-top: transparent;">
              <div class="accord-header">
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] leading-[2.7rem] tracking-[0.0015em] text-[#66667D] border border-[#F2F2F2] w-full h-[6rem] flex justify-start items-center px-spacing30 rounded-full">Active campaigns - what does it mean?</div>
              </div>
              <div class="accord-content collapse">
                <div class="accord-body">
                  The Enterprise plan includes all the Pro plan features, but it also includes a fundraiser module with custom fundraising limits. Along side with your campaign you can also allow others to create their campaigns. As an organization owner, you have the control to manage the campaigns from the fundraisers. For example. It has to go through manual verification or not.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    </div>
    

  <div class="container-fluid">
    <div class="container">
      <div class="2xl:py-[10rem] xl:py-[10rem] lg:py-[8rem] md:py-[6rem] py-[4rem]">
        <div class="rounded-[2rem]">
          <h2 class="heading-large text-center w-full max-w-[64.4rem] mx-auto">
            Crafted for Creative Needs
          </h2>
          <p
            class="title w-full max-w-[65.3rem] mx-auto text-center mt-[2rem]"
          >
          To ensure ease of your creative journey and hassle-free experience for your supporter Crowdfundly for Creators has been designed. 
          </p>
          <div class="mt-spacing40">
            <a href="#" class="">
              <button
                class="w-[16.7rem] mx-auto flex justify-center items-center h-[5.5rem] bg-primary not-italic font-semibold font-rubik text-[1.6rem] text-white leading-[1rem] tracking-[0.05em] btn-hover rounded-full"
              >
              Get started
              </button>
            </a>
          </div>
      </div>
      </div>
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
<script>
  document.getElementById("fname").focus();
</script>

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
  </body>
</html>