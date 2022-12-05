<?php
 /**
  * Template Name: crowdfundly creator
  */
?>
<?php include 'crowdfundly-cretors-common/header.php'; ?>

    <!-- overview feature -->
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
          <!-- <div class="mt-spacing36">
            <div
              class="max-w-[56.7rem] mx-auto w-full h-[7.6rem rounded-full border border-extraLightGray p-[0.8rem] pl-spacing16 bg-white"
            >
            <form action="" method="get">
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
              </form>
             
            </div>
            <?php 
             $user_name_value = json_decode($result, true);
            if($user_name_value['username'] == true) : ?>
            <p class="w-full max-w-[65.5rem] mx-auto text-center text-sm mt-spacing5 text-red-500" style="color:red">This Username Taken, Please Taken Another Username</p>
            <?php endif; ?>

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
          </div> -->
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
          <p
            class="title w-full max-w-[65.5rem] mx-auto text-center mt-spacing20"
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
          <img class="w-full max-w-[96%] md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/banner/crowdfundly-banner-image.svg'); ?>" alt="crowdfundly overview feature image">
        </div>
        <div>
            <div class="container-fluid">
                <div class="container">
                    <div class="">
                        <div class="relative">
                            <div class="2xl:pb-[10rem] xl:pb-[10rem] lg:pb-[8rem] md:pb-[6rem] pb-[4rem]">
                                    <h3 class="heading-large text-center w-full max-w-[82.6rem] mx-auto">
                                        Give Your Audience a Whole New Experience   
                                    </h3>
                                <div class="w-full mx-auto mt-4">
                                    <!-- Tabs -->
                                    <div class="">
                                        <div class="mb-spacing30 flex justify-center">
                                            <ul id="tabs" class="pt-2 px-1 tab-button 2xl:grid 2xl:grid-cols-7 xl:grid xl:grid-cols-7 lg:grid lg:grid-cols-7 md:grid md:grid-cols-7 sm:grid sm:grid-cols-3 grid grid-cols-2 justify-center gap-[1.8rem]" style="padding: 20px; border-radius: 10px 3px 3px 10px;">
                                             
                                                <!-- tab button -->
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
    
                                        <!-- Tab Contents -->
                                        <div" id="tab-contents" class="lg:mt-0 mt-16 ">
                                          <!-- tab content index -->
                                            <div id="first" class="">
                                              <div class="owl-carousel owl-theme">
                                                <!-- single card -->
                                                <div class="item">
                                                  <div class="card-wrapper">
                                                    <div class="relative">
                                                      <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-card-02.svg'); ?>" alt="crowdfundly card image">
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
                                             <!-- single card -->
                                             <div class="item">
                                              <div class="card-wrapper">
                                                <div class="relative">
                                                  <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Rectangle 78 (1).svg'); ?>" alt="crowdfundly card image">
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
                                         <!-- single card -->
                                         <div class="item">
                                          <div class="card-wrapper">
                                            <div class="relative">
                                              <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Rectangle 78 (2).svg'); ?>" alt="crowdfundly card image">
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
                                     <!-- single card -->
                                     <div class="item">
                                      <div class="card-wrapper">
                                        <div class="relative">
                                          <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Rectangle 78.svg'); ?>" alt="crowdfundly card image">
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
                                 <!-- single card -->
                                 <div class="item">
                                  <div class="card-wrapper">
                                    <div class="relative">
                                      <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-card-02.svg'); ?>" alt="crowdfundly card image">
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
                             <!-- single card -->
                             <div class="item">
                              <div class="card-wrapper">
                                <div class="relative">
                                  <img class="card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/home/crowdfundly-card-02.svg'); ?>" alt="crowdfundly card image">
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
        </div>
      </div>
    </div>

    <!-- donations feature -->
    <div class="container-fluid">
      <div class="container">
        <div class="rounded-[2rem]">
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
                <div class="mt-[5.4rem]">
                  <div
                    class="max-w-[56.7rem] mx-auto w-full h-[7.6rem rounded-full border border-extraLightGray p-[0.8rem] pl-spacing16 bg-white border-red"
                  >
                    <div class="flex mt-space12 bg-lightblue items-center">
                      <span
                        class="not-italic font-medium font-rubik md:text-[2rem] text-[1.3rem] leading-[2.4rem] text-[#404040] tracking-[0.0015em] btn-hover lg:rounded-full rounded-lg"
                      >
                        crowdfundly.com/
                      </span>
                      <input
                        placeholder="yourname"
                        type="text"
                        class="bg-gray-50 rounded-r-full text-[#404040] font-medium font-rubik leading-[2.4rem] outline-none block flex-1 w-full md:text-[2rem] text-[1.3rem] p-2.5"
                      />
                      <span class="inline-flex items-center">
                        <div class="">
                          <button
                            class="md:w-[20.3rem] w-[12.3rem] h-[5.5rem] bg-primary not-italic font-medium font-rubik md:text-[2rem] text-[1.3rem] text-white leading-[2.4rem] tracking-[0.0015em] btn-hover rounded-full"
                          >
                            Create my page
                          </button>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- all feature -->
        <div class="pt-[5rem]">
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
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Recive Support.svg'); ?>" alt="crowdfundly overview feature image">
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
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Sell card.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>



        <div class="pt-[5rem]">
          <div class="md:grid grid-cols-2 gap-[5.4rem] items-center">
            <div>
              <div class="max-w-[46rem] w-full">
                <h2 class="heading-large text-left w-full max-w-[72.6rem]">
                  Recurring Revenue from Membership
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
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Membership.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>

        <div class="pt-[1rem]">
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
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Stay Connected.svg'); ?>" alt="crowdfundly overview feature image">
            </div>
          </div>
        </div>

        <div class="pt-[5rem]">
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
              <img class="w-full max-w-[58.5rem] max-h-[70rem] h-auto md:pt-0 pt-spacing30" src="<?php echo esc_url( get_template_directory_uri() . '/crowd_assets/images/Group 47376.svg'); ?>" alt="crowdfundly overview feature image"/>
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
                <div class="acccord-title font-nunito not-italic font-extrabold text-[2rem] text-[#66667D] border border-[#F2F2F2] rounded-full leading-[2.7rem] tracking-[0.0015em]w-full relative h-[6rem] flex justify-start items-center px-spacing30 ">Active campaigns - what does it mean?</div> 
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
  <?php include 'crowdfundly-cretors-common/footer.php'; ?>