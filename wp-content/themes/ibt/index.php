<?php get_header();?>        
        <section class="w-full relative h-[340px] sm:h-[390px] lg:h-[425px] hero-swiper">
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="w-full h-[340px] sm:h-[390px] lg:h-[425px] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-1.webp" alt="fondo" class="object-cover w-full h-full absolute z-0" />
                            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                            <div class="w-full absolute z-10 text-center top-1/2 transform -translate-y-1/2 mx-auto">
                                <h1 class="font-beVietnam text-[30px] md:text-[40px] lg:text-[60px] text-[#fff] tracking-[-2px] font-[700] max-w-[270px] sm:max-w-none mx-auto"
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                    Fiber Internet in your Home
                                </h1>
                                <p class="text-[#fff] font-[400] text-[16px] md:text-[20px] max-w-[300px] sm:max-w-none mx-auto"
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                    High speed Internet for everyone to enjoy
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full h-[340px] sm:h-[390px] lg:h-[425px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg.png" alt="fondo" class="object-cover w-full h-full absolute z-0" />
                            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                        </div>
                    </div>
                </div>
                <div
                    class="hidden md:flex swiper-button-next absolute after:content-none w-[62px] h-[62px] right-[2%] md:right-[5%] lg:right-[8%] xl:right-[10%] 2xl:right-[20%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <circle cx="31" cy="31" r="30.5" transform="matrix(-1 0 0 1 62 0)" stroke="white"
                            class="shadow-xl shadow-black/60" />
                        <path
                            d="M27 24.3372L28.3385 22.9999L35.6292 30.2881C35.7467 30.4048 35.8399 30.5437 35.9036 30.6967C35.9672 30.8496 36 31.0137 36 31.1794C36 31.345 35.9672 31.5091 35.9036 31.662C35.8399 31.815 35.7467 31.9539 35.6292 32.0707L28.3385 39.3625L27.0013 38.0253L33.844 31.1812L27 24.3372Z"
                            fill="white" />
                    </svg>
                </div>
                <div
                    class="hidden md:flex swiper-button-prev absolute after:content-none w-[62px] h-[62px] left-[2%] md:left-[5%] lg:left-[8%] xl:left-[10%] 2xl:left-[20%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <circle cx="31" cy="31" r="30.5" stroke="white" class="shadow-xl shadow-black/60" />
                        <path
                            d="M35 24.3372L33.6615 22.9999L26.3708 30.2881C26.2533 30.4048 26.1601 30.5437 26.0964 30.6967C26.0328 30.8496 26 31.0137 26 31.1794C26 31.345 26.0328 31.5091 26.0964 31.662C26.1601 31.815 26.2533 31.9539 26.3708 32.0707L33.6615 39.3625L34.9987 38.0253L28.156 31.1812L35 24.3372Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="flex w-full absolute bottom-[20px] left-0">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="mt-[50px] sm:mt-[80px]" id="residential_plans">
            <div class="container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <h2 class="text-center font-beVietnam text-[24px] sm:text-[30px] font-medium text-darkGray"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    Residential Broadband
                </h2>
                <p class="text-center mt-[15px] mb-[50px] font-normal text-darkGray" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true">
                    Choose the plan that connects with you best
                </p>
                <div class="grid grid-cols-[repeat(auto-fill,_minmax(260px,_1fr))] md:grid-cols-3 gap-[40px] md:gap-[15px] xl:gap-[40px] mb-[25px]">
                    <div
                        class="border-[1px] rounded-[20px] border-[#9EA0A3] w-full max-w-[338px] max-h-[532px] mx-auto">
                        <div
                            class="bg-[#F0F4F8] relative h-[75px] sm:h-[100px] lg:h-[135px] rounded-t-[20px] flex flex-row sm:flex-col items-center justify-center gap-2 sm:gap-0">
                            <p
                                class="font-[400] text-[20px] lg:text-[24px] text-darkGray font-beVietnam md:mt-3 lg:mt-4">
                                Fiber Core
                            </p>
                            <p class="font-[600] text-[20px] lg:text-[24px] text-primaryBlue font-beVietnam">
                                500 Mbps
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/wifi.svg" alt=""
                                class="absolute top-5 sm:top-3 right-2 sm:right-3 w-[32px] lg:w-[43px] h-[32px] lg:h-[43px]" />
                        </div>
                        <div class="py-[12px] lg:py-[16px] px-[30px] md:px-[18px] lg:px-[30px] flex flex-col">
                            <p class="text-darkGray text-center mb-[12px] text-[14px] sm:text-[16px] items-center flex justify-center">
                                From
                                <span class="text-[30px] lg:text-[36px] font-[500] mx-[2px] sm:mx-1">$ 60</span>/mo
                            </p>
                            <a href="" class="btn mb-[12px] sm:mb-[15px] !flex !max-w-full">Shop now</a>
                            <p
                                class="mb-[10px] sm:mb-[15px] flex gap-2 items-center text-primaryBlue mx-auto sm:mx-0 cursor-pointer toggle-accordion font-normal">
                                Features & benefits
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
                                    fill="none" class="chevron transform transition-transform duration-300">
                                    <path
                                        d="M12.4198 7.58585L13.4798 6.52485L7.70277 0.745854C7.6102 0.6527 7.50012 0.578771 7.37887 0.528323C7.25762 0.477875 7.12759 0.451904 6.99627 0.451904C6.86494 0.451904 6.73491 0.477875 6.61366 0.528323C6.49241 0.578771 6.38233 0.6527 6.28977 0.745854L0.509766 6.52485L1.56977 7.58485L6.99477 2.16085L12.4198 7.58585Z"
                                        fill="#007AF3" />
                                </svg>
                            </p>
                            <div
                                class="accordion-content flex flex-col gap-3 overflow-hidden transition-[max-height,opacity] duration-500 ease-in-out max-h-0 opacity-0">
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Same speed for Download, and
                                    Upload
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> For up to <b>10 Devices</b>
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Stable connection
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> No Contract, Cancel Anytime
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Includes Wi-Fi 6G equipment
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border-[1px] rounded-[20px] border-[#9EA0A3] w-full max-w-[338px] max-h-fit mx-auto">
                        <div
                            class="bg-[#F0F4F8] relative h-[75px] sm:h-[100px] lg:h-[135px] rounded-t-[20px] flex flex-row sm:flex-col items-center justify-center gap-2 sm:gap-0">
                            <p
                                class="font-[400] text-[20px] lg:text-[24px] text-darkGray font-beVietnam mt-4 sm:mt-3 lg:mt-4">
                                Fiber Plus
                            </p>
                            <p
                                class="font-[600] text-[20px] lg:text-[24px] text-primaryBlue font-beVietnam mt-4 sm:mt-0">
                                1 GIG
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/wifi.svg" alt=""
                                class="absolute top-5 sm:top-3 right-2 sm:right-3 w-[32px] lg:w-[43px] h-[32px] lg:h-[43px]" />
                            <div
                                class="absolute top-0 bg-green font-beVietnam lg:py-[2px] py-[1px] px-[15px] lg:px-[35px] rounded-b-[10px] text-[#fff] text-[14px] lg:text-[16px]">
                                Most popular
                            </div>
                        </div>
                        <div class="py-[12px] lg:py-[16px] px-[30px] md:px-[18px] lg:px-[30px] flex flex-col">
                            <p
                                class="text-darkGray text-center mb-[12px] text-[14px] sm:text-[16px] items-center flex justify-center">
                                From
                                <span class="text-[30px] lg:text-[36px] font-[500] mx-[2px] sm:mx-1">$ 80</span>/mo
                            </p>
                            <a href="" class="btn mb-[12px] sm:mb-[15px] !flex !max-w-full">Shop now</a>
                            <p
                                class="mb-[10px] sm:mb-[15px] flex gap-2 items-center text-primaryBlue mx-auto sm:mx-0 cursor-pointer toggle-accordion font-normal">
                                Features & benefits
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
                                    fill="none" class="chevron transform transition-transform duration-300">
                                    <path
                                        d="M12.4198 7.58585L13.4798 6.52485L7.70277 0.745854C7.6102 0.6527 7.50012 0.578771 7.37887 0.528323C7.25762 0.477875 7.12759 0.451904 6.99627 0.451904C6.86494 0.451904 6.73491 0.477875 6.61366 0.528323C6.49241 0.578771 6.38233 0.6527 6.28977 0.745854L0.509766 6.52485L1.56977 7.58485L6.99477 2.16085L12.4198 7.58585Z"
                                        fill="#007AF3" />
                                </svg>
                            </p>
                            <div
                                class="accordion-content flex flex-col gap-3 overflow-hidden transition-[max-height,opacity] duration-500 ease-in-out max-h-0 opacity-0">
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> For Download and, Upload
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> For up to <b>20 Devices</b>
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Advanced Features Including
                                    Parental Controls
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> No Contract, Cancel Anytime
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Includes Wi-Fi 6G equipment
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="border-[1px] rounded-[20px] border-[#9EA0A3] w-full max-w-[338px] max-h-[532px] mx-auto">
                        <div
                            class="bg-[#F0F4F8] relative h-[75px] sm:h-[100px] lg:h-[135px] rounded-t-[20px] flex flex-row sm:flex-col items-center justify-center gap-2 sm:gap-0">
                            <p
                                class="font-[400] text-[20px] lg:text-[24px] text-darkGray font-beVietnam md:mt-3 lg:mt-4">
                                Fiber Pro
                            </p>
                            <p class="font-[600] text-[20px] lg:text-[24px] text-primaryBlue font-beVietnam">
                                2 GIG
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/wifi.svg" alt=""
                                class="absolute top-5 sm:top-3 right-2 sm:right-3 w-[32px] lg:w-[43px] h-[32px] lg:h-[43px]" />
                        </div>
                        <div class="py-[12px] lg:py-[16px] px-[30px] md:px-[18px] lg:px-[30px] flex flex-col">
                            <p
                                class="text-darkGray text-center mb-[12px] text-[14px] sm:text-[16px] items-center flex justify-center">
                                From
                                <span class="text-[30px] lg:text-[36px] font-[500] mx-[2px] sm:mx-1">$ 120</span>/mo
                            </p>
                            <a href="" class="btn mb-[12px] sm:mb-[15px] !flex !max-w-full">Shop now</a>
                            <p
                                class="mb-[10px] sm:mb-[15px] flex gap-2 items-center text-primaryBlue mx-auto sm:mx-0 cursor-pointer toggle-accordion font-normal">
                                Features & benefits
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
                                    fill="none" class="chevron transform transition-transform duration-300">
                                    <path
                                        d="M12.4198 7.58585L13.4798 6.52485L7.70277 0.745854C7.6102 0.6527 7.50012 0.578771 7.37887 0.528323C7.25762 0.477875 7.12759 0.451904 6.99627 0.451904C6.86494 0.451904 6.73491 0.477875 6.61366 0.528323C6.49241 0.578771 6.38233 0.6527 6.28977 0.745854L0.509766 6.52485L1.56977 7.58485L6.99477 2.16085L12.4198 7.58585Z"
                                        fill="#007AF3" />
                                </svg>
                            </p>
                            <div
                                class="accordion-content flex flex-col gap-3 overflow-hidden transition-[max-height,opacity] duration-500 ease-in-out max-h-0 opacity-0">
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Same speed for Download, and
                                    Upload
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> For up to <b>20+ Devices</b>
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Advanced Security Features
                                </p>
                                <p
                                    class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" /> Includes Wi-Fi 6G equipment
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-darkGray">*Taxes apply</p>
            </div>
        </section>
<section class="mt-[50px] sm:mt-[80px] overflow-hidden">
            <div class="container-w">
                <h3 class="max-w-[276px] mx-auto sm:max-w-none text-[28px] sm:text-[36px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    The best experience at home
                </h3>
                <div class="benefits relative flex flex-col md:flex-row md:p-[70px]">
                    <div
                        class="swiper-button-next w-[39px] md:w-[48px] h-auto z-[2] right-[10px] md:right-[15px] lg:right-[40px] after:content-none top-[70%] md:top-[50%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <circle cx="31" cy="31" r="30.5" transform="matrix(-1 0 0 1 62 0)" stroke="black" />
                            <path
                                d="M27 24.3372L28.3385 22.9999L35.6292 30.2881C35.7467 30.4048 35.8399 30.5437 35.9036 30.6967C35.9672 30.8496 36 31.0137 36 31.1794C36 31.345 35.9672 31.5091 35.9036 31.662C35.8399 31.815 35.7467 31.9539 35.6292 32.0707L28.3385 39.3625L27.0013 38.0253L33.844 31.1812L27 24.3372Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-prev w-[39px] md:w-[48px] h-auto z-[2] left-[10px] md:left-[15px] lg:left-[40px] after:content-none top-[70%] md:top-[50%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <circle cx="31" cy="31" r="30.5" stroke="black" />
                            <path
                                d="M35 24.3372L33.6615 22.9999L26.3708 30.2881C26.2533 30.4048 26.1601 30.5437 26.0964 30.6967C26.0328 30.8496 26 31.0137 26 31.1794C26 31.345 26.0328 31.5091 26.0964 31.662C26.1601 31.815 26.2533 31.9539 26.3708 32.0707L33.6615 39.3625L34.9987 38.0253L28.156 31.1812L35 24.3372Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div class="w-full md:w-[50%] order-2 md:order-1" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">
                        <div class="swiper sliderLateral md:w-[330px] mx-auto w-full">
                            <div class="swiper-wrapper mx-auto w-full ml-[18%] min-[641px]:ml-[30%] md:ml-[5%] lg:ml-0">
                                <div
                                    class="swiper-slide rounded-[24px] transition-opacity max-w-[230px] lg:max-w-[330px] h-auto">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider1.webp" class="rounded-[24px] w-[230px] lg:w-[330px] h-auto" />
                                </div>

                                <div
                                    class="swiper-slide rounded-[24px] transition-opacity max-w-[230px] lg:max-w-[330px] h-auto">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.webp" class="rounded-[24px] w-[230px] lg:w-[330px] h-auto" />
                                </div>

                                <div
                                    class="swiper-slide rounded-[24px] transition-opacity max-w-[230px] lg:max-w-[330px] h-auto">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider3.webp" class="rounded-[24px] w-[230px] lg:w-[330px] h-auto" />
                                </div>

                                <div
                                    class="swiper-slide rounded-[24px] transition-opacity max-w-[230px] lg:max-w-[330px] h-auto">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider4.webp" class="rounded-[24px] w-[230px] lg:w-[330px] h-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-[50%] order-1 md:order-2 mt-[30px] md:mt-0" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-once="true">
                        <div class="h-full">
                            <div class="swiper sliderLateralText h-full lg:pl-[40px] xl:pl-0 lg:pr-[40px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide flex items-center">
                                        <div
                                            class="bg-[#fff] h-full max-w-[385px] flex flex-col justify-center mx-auto items-center text-center md:items-start md:text-start">
                                            <h3 class="text-[#4F4F4F] text-[20px] md:text-[30px] font-[500]">
                                                Streaming and Gaming
                                            </h3>
                                            <p
                                                class="text-[#5B5B5B] text-[16px] font-normal text-center md:text-left mt-[10px] mb-[30px] md:mb-[25px]">
                                                Play without delay and have fun with a complete
                                                experience in your games.
                                            </p>
                                            <div class="hidden md:flex">
                                                <a href="/check.html" class="btn">Check availability</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide flex items-center">
                                        <div
                                            class="bg-[#fff] h-full max-w-[385px] flex flex-col justify-center mx-auto items-center text-center md:items-start md:text-start">
                                            <h3 class="text-[#4F4F4F] text-[20px] md:text-[30px] font-[500]">
                                                High speed Education
                                            </h3>
                                            <p
                                                class="text-[#5B5B5B] text-[16px] font-normal text-center md:text-left mt-[10px] mb-[30px] md:mb-[25px]">
                                                Browse with a speed of up to 1000 mbps and learn
                                                without limits.
                                            </p>
                                            <div class="hidden md:flex">
                                                <a href="/check.html" class="btn">Check availability</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide flex items-center">
                                        <div
                                            class="bg-[#fff] h-full max-w-[385px] flex flex-col justify-center mx-auto items-center text-center md:items-start md:text-start">
                                            <h3 class="text-[#4F4F4F] text-[20px] md:text-[30px] font-[500]">
                                                More video calls between friends
                                            </h3>
                                            <p
                                                class="text-[#5B5B5B] text-[16px] font-normal text-center md:text-left mt-[10px] mb-[30px] md:mb-[25px]">
                                                Talk to your friends without leaving home. Maximum
                                                internet speed for video calls without interruptions
                                            </p>
                                            <div class="hidden md:flex">
                                                <a href="/check.html" class="btn">Check availability</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide flex items-center">
                                        <div
                                            class="bg-[#fff] h-full max-w-[385px] flex flex-col justify-center mx-auto items-center text-center md:items-start md:text-start">
                                            <h3 class="text-[#4F4F4F] text-[20px] md:text-[30px] font-[500]">
                                                Spend time with family
                                            </h3>
                                            <p
                                                class="text-[#5B5B5B] text-[16px] font-normal text-center md:text-left mt-[10px] mb-[30px] md:mb-[25px]">
                                                With the high speed internet you can watch movies or
                                                series as a family without interruption.
                                            </p>
                                            <div class="hidden md:flex">
                                                <a href="/check.html" class="btn">Check availability</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-[50px] sm:mt-[80px]">
            <div class="container-w">
                <div class="bg-[#F0F4F8] relative min-h-[455px] overflow-hidden rounded-[20px] md:flex justify-center items-center hidden"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="absolute top-1/2 left-[-260px] lg:left-[-160px] xl:left-[-100px] w-[630px] h-[630px] bg-[#DFEBF6] rounded-full transform -translate-y-1/2 z-0">
                    </div>
                    <div class="w-[50%]">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" alt="" class="absolute top-[5%] left-[2%]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.svg" alt="" class="absolute top-[45%] left-[12%] z-10" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-3.svg" alt="" class="absolute bottom-[20%] left-[23%] z-10" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-4.svg" alt="" class="absolute bottom-[25%] left-[15%] z-10" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img.webp" alt="" class="absolute top-[15%] left-[6%] rounded-[12px]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-2.webp" alt="" class="absolute bottom-[10%] left-[25%] rounded-full" />
                    </div>
                    <div class="w-[45%]">
                        <h3 class="text-[29px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">
                            Symmetrical connectivity
                        </h3>
                        <h4 class="text-[30px] lg:text-[40px] font-beVietnam text-[#00B574] font-[600] tracking-[-2px]">
                            in your entire home
                        </h4>
                        <p class="text-darkGray max-w-[455px] mt-[20px] mb-[50px]">
                            Experience same download and upload speed with Fiber Internet.
                            With our next generation 6G Wi-Fi, no signal drop or spotty
                            connection.
                        </p>
                        <a href="#residential_plans" class="btn">Check all plans</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <h3 class="text-[28px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">
                        Symmetrical connectivity
                    </h3>
                    <h4 class="text-[28px] font-beVietnam text-[#00B574] font-[600] tracking-[-2px]">
                        in your entire home
                    </h4>
                    <p class="text-darkGray max-w-[455px] mt-[16px] mb-[16px]">
                        Experience same download and upload speed with Fiber Internet.
                        With our next generation 6G Wi-Fi, no signal drop or spotty
                        connection.
                    </p>
                    <div class="bg-[#F0F4F8] relative h-[166px] sm:h-[300px] overflow-hidden rounded-[20px] lg:flex justify-center items-center"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <div
                            class="absolute top-1/2 left-[-20px] sm:left-[-80px] w-[248px] sm:w-[450px] h-[248px] sm:h-[450px] bg-[#DFEBF6] rounded-full transform -translate-y-1/2 z-0">
                        </div>
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" alt=""
                                class="absolute top-[5%] left-[2%] w-[70px] h-[70px] sm:w-[100px] sm:h-[100px]" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/conectar.svg" alt=""
                                class="absolute bottom-[8%] right-[22%] z-10 w-[36%] max-[375px]:w-[30%]" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img.webp" alt=""
                                class="absolute top-[20%] left-[10%] rounded-[12px] w-[140px] sm:w-[240px] h-auto" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img-2.webp" alt=""
                                class="absolute top-[20%] sm:top-[30%] right-[10%] rounded-full h-[96px] w-auto sm:h-[150px]" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
 <?php get_footer();?>     
   