<?php
/*
Template Name: Landing
*/
?>


<?php get_header() ?>
<main class="flex flex-col flex-grow">

    <!--start of hero (landing) section-->
    <section class="hero__container h-screen flex items-center justify-center">
        <!-- Video Background -->
        <div class="absolute w-screen h-screen overflow-hidden">
            <video class="bg-grey-800 object-cover object-bottom h-full w-full lg:object-none lg:object-right"
                src="<?php echo get_template_directory_uri() . "/assets/videos/landing-video.mp4" ?>" autoplay
                loop></video>
        </div>
        <!-- Blue Overlay -->
        <div class="absolute w-full bg-blue-800 opacity-30 z-10 h-screen"></div>
        <div class="flex flex-col justify-center items-center z-10 -mt-4">
            <h1 class="text-center text-5xl lg:text-7xl uppercase text-blue-50 font-bold">WE KEEP YOU COOL</h1>
            <p
                class="text-lg font-medium lg:text-2xl text-blue-50 mt-12 mb-16 max-w-prose lg:w-2/3 leading-relaxed text-center">
                Experience year-round comfort with our high-efficiency air conditioning solutions, providing
                unparalleled cooling performance and energy savings for your home or business.</p>
            <div class="flex flex-col md:block">
                <a class="inline-block uppercase text-center font-bold px-5 py-3 lg:px-10 lg:py-4 border-2 rounded-md border-blue-400 text-blue-50 mx-2 lg:mx-8 hover:text-blue-400 hover:border-blue-50 focus:ring-2 focus:ring-blue-300"
                    href="/products">See How</a>
            </div>
        </div>
    </section>
    <!--end of hero (landing) section-->

    <!--start of overlapping Cards section-->
    <section
        class="relative md:flex md:flex-row md:flex-wrap md:gap-y-8 justify-center items-center pt-18 pb-30 -mt-32 lg:-mt-32 z-10">
        <!-- Card -->
        <div class="p-8 mx-12 mb-10 lg:mb-0 w-80 shadow-md rounded-md rounded-tr-20xl bg-white">
            <svg class="mb-8" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2V30" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M19.6075 5C18.5188 5.65621 17.2712 6.00203 16 6C14.7288 6.00203 13.4812 5.65621 12.3925 5"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.3925 27C13.4821 26.3457 14.7291 26 16 26C17.2709 26 18.518 26.3457 19.6075 27"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28.1244 9L3.87563 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M27.3294 13.625C26.2177 13.0085 25.2947 12.1011 24.6593 11.0001C24.0239 9.89912 23.7001 8.64599 23.7225 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M4.67062 18.375C5.7823 18.9915 6.70528 19.8989 7.34067 20.9999C7.97605 22.1009 8.2999 23.354 8.2775 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.87563 9L28.1244 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M4.67062 13.625C5.7823 13.0085 6.70528 12.1011 7.34067 11.0001C7.97605 9.89912 8.2999 8.64599 8.2775 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M27.3294 18.375C26.2177 18.9915 25.2947 19.8989 24.6593 20.9999C24.0239 22.1009 23.7001 23.354 23.7225 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h2 class="font-semibold text-xl lg:text-2xl mb-6 text-gray-700">Superior Cooling Performance</h2>
            <p class="text-gray-700">Harness the power of advanced cooling technology, ensuring rapid temperature
                control and a consistently
                comfortable environment in any space.</p>
        </div>

        <!-- Card -->
        <div class="p-8 mx-12 mb-10 lg:mb-0 w-80 shadow-md rounded-md rounded-tr-20xl bg-white">
            <svg class="mb-8" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2V30" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M19.6075 5C18.5188 5.65621 17.2712 6.00203 16 6C14.7288 6.00203 13.4812 5.65621 12.3925 5"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.3925 27C13.4821 26.3457 14.7291 26 16 26C17.2709 26 18.518 26.3457 19.6075 27"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28.1244 9L3.87563 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M27.3294 13.625C26.2177 13.0085 25.2947 12.1011 24.6593 11.0001C24.0239 9.89912 23.7001 8.64599 23.7225 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M4.67062 18.375C5.7823 18.9915 6.70528 19.8989 7.34067 20.9999C7.97605 22.1009 8.2999 23.354 8.2775 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.87563 9L28.1244 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M4.67062 13.625C5.7823 13.0085 6.70528 12.1011 7.34067 11.0001C7.97605 9.89912 8.2999 8.64599 8.2775 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M27.3294 18.375C26.2177 18.9915 25.2947 19.8989 24.6593 20.9999C24.0239 22.1009 23.7001 23.354 23.7225 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h2 class="font-semibold text-xl lg:text-2xl mb-6 text-gray-700">Energy-Efficient Design</h2>
            <p class="text-gray-700">Our air conditioners are crafted with efficiency in mind, helping you
                stay cool and minimize your electric bills without compromising on sustainability.</p>
        </div>


        <!-- Card -->
        <div class="p-8 mx-12 mb-10 lg:mb-0 w-80 shadow-md rounded-md rounded-tr-20xl bg-white">
            <svg class="mb-8" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2V30" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M19.6075 5C18.5188 5.65621 17.2712 6.00203 16 6C14.7288 6.00203 13.4812 5.65621 12.3925 5"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.3925 27C13.4821 26.3457 14.7291 26 16 26C17.2709 26 18.518 26.3457 19.6075 27"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28.1244 9L3.87563 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M27.3294 13.625C26.2177 13.0085 25.2947 12.1011 24.6593 11.0001C24.0239 9.89912 23.7001 8.64599 23.7225 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M4.67062 18.375C5.7823 18.9915 6.70528 19.8989 7.34067 20.9999C7.97605 22.1009 8.2999 23.354 8.2775 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.87563 9L28.1244 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M4.67062 13.625C5.7823 13.0085 6.70528 12.1011 7.34067 11.0001C7.97605 9.89912 8.2999 8.64599 8.2775 7.375"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M27.3294 18.375C26.2177 18.9915 25.2947 19.8989 24.6593 20.9999C24.0239 22.1009 23.7001 23.354 23.7225 24.625"
                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h2 class="font-semibold text-xl lg:text-2xl mb-6 text-gray-700">Smart Climate Control</h2>
            <p class="text-gray-700">Enjoy the convenience of intelligent climate management with smart features that
                allow you to customize settings, monitor usage remotely, and optimize your cooling experience for
                maximum comfort and efficiency.</p>
        </div>
    </section>

    <section class="pt-8 lg:pt-36 px-6 md:px-12 lg:mx-auto max-w-screen-xl flex justify-center fade-in-up-on-scroll">
        <div>
            <div class="flex flex-col lg:mx-8 lg:flex-row">
                <div class="w-full mt-8 lg:mt-0">
                    <svg width="40" height="24" viewBox="0 0 40 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 0C14.66 0 11.34 2.66 10 8C12 5.34 14.34 4.34 17 5C18.52 5.38 19.62 6.48 20.82 7.7C22.78 9.7 25 12 30 12C35.34 12 38.66 9.34 40 4C38 6.66 35.66 7.66 33 7C31.48 6.62 30.4 5.52 29.18 4.3C27.22 2.3 25 0 20 0ZM10 12C4.66 12 1.34 14.66 0 20C2 17.34 4.34 16.34 7 17C8.52 17.38 9.6 18.48 10.82 19.7C12.78 21.7 15 24 20 24C25.34 24 28.66 21.34 30 16C28 18.66 25.66 19.66 23 19C21.48 18.62 20.4 17.52 19.18 16.3C17.22 14.3 15 12 10 12Z"
                            fill="#3B82F6" />
                    </svg>
                    <h2 class="mt-4 mb-10 font-bold text-4xl text-gray-700">Who We Are</h2>
                    <p class="text-gray-600 leading-loose mb-6">
                        At the core of our identity is a commitment to superior cooling. Explore a new level of comfort
                        with our air conditioning units, meticulously designed to deliver unparalleled cooling
                        performance, ensuring an optimal environment for your well-being.
                    </p>
                    <p class="text-gray-600 leading-loose mb-6">
                        Embrace our identity rooted in innovation and sustainability. Our air conditioners not only
                        provide exceptional cooling but also contribute to eco-friendly living by minimizing electricity
                        bills. Discover an energy-efficient solution that aligns with who we are.
                    </p>
                    <p class="text-gray-600 leading-loose mb-6">
                        We define ourselves through smart climate control features. Tailor your comfort with
                        customizable settings, remote monitoring, and efficient optimization. Uncover a smarter approach
                        to cooling that embodies our identity as a technologically advanced solution for your home or
                        business.
                    </p>
                </div>
                <div class="relative w-full pb-96 lg:pb-0 lg:ml-32 mb-20">
                    <img class="absolute w-full h-full object-cover"
                        src="<?php echo get_template_directory_uri() . "/assets/images/robo_main.webp" ?>"
                        alt="Air conditioner robot">
                </div>
            </div>
        </div>
    </section>


    <!-- Start of Testimonials Section -->
    <section class="flex flex-col items-center pt-8 pb-16 lg:pt-16 lg:pb-32 fade-in-up-on-scroll">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.4 14.4C9.94 14.4 12.8 17.26 12.8 20.8C12.8 24.34 9.94 27.2 6.4 27.2C2.86 27.2 0 24.34 0 20.8C0 17.26 2.86 14.4 6.4 14.4ZM21.6 24C22.6609 24 23.6783 24.4214 24.4284 25.1716C25.1786 25.9217 25.6 26.9391 25.6 28C25.6 29.0609 25.1786 30.0783 24.4284 30.8284C23.6783 31.5786 22.6609 32 21.6 32C20.5391 32 19.5217 31.5786 18.7716 30.8284C18.0214 30.0783 17.6 29.0609 17.6 28C17.6 26.9391 18.0214 25.9217 18.7716 25.1716C19.5217 24.4214 20.5391 24 21.6 24ZM22.4 0C24.9461 0 27.3879 1.01143 29.1882 2.81178C30.9886 4.61212 32 7.05392 32 9.6C32 14.9 27.7 19.2 22.4 19.2C19.8539 19.2 17.4121 18.1886 15.6118 16.3882C13.8114 14.5879 12.8 12.1461 12.8 9.6C12.8 4.3 17.1 0 22.4 0Z"
                fill="#3B82F6" />
        </svg>
        <h2 class="mx-4 mt-4 mb-10 text-center font-bold text-4xl text-gray-700">What Others Are Saying</h2>
        <div class="flex flex-row md:gap-y-12 flex-wrap justify-center pt-16 pb-18 max-w-screen-2xl">

            <!-- Start of Testimonial Card-->
            <div class="w-72 lg:w-72">
                <div class="flex flex-col items-center pb-6">
                    <img class="rounded-full w-32 shadow-inner"
                        src="<?php echo get_template_directory_uri() . "/assets/images/smiling_man.webp" ?>" alt="">
                    <span class="text-sm font-bold mt-2 tracking-wider text-gray-600">Thom Yorke</span>
                    <span class="text-sm text-gray-400">Founder, AlphaGroup</span>
                </div>
                <p class="testimonial_statement relative px-6 text-center font-medium text-gray-700">“ChillOut has
                    exceeded my expectations in every aspect. The innovative energy-efficient design
                    and smart climate control features make ChillOut the go-to choice for those who prioritize both
                    performance and sustainability.”</p>
            </div>
            <!-- End of Testimonial Card-->

            <!-- Start of Testimonial Card-->
            <div class="w-72 lg:w-72">
                <div class="flex flex-col items-center pb-6">
                    <img class="rounded-full w-32 shadow-inner"
                        src="<?php echo get_template_directory_uri() . "/assets/images/smiling_woman.webp" ?>" alt="">
                    <span class="text-sm font-bold mt-2 tracking-wider text-gray-600">Alfa Mist</span>
                    <span class="text-sm text-gray-400">Creative Director, Antiphon</span>
                </div>
                <p class="testimonial_statement relative px-6 text-center font-medium text-gray-700">“ChillOut air
                    conditioners have transformed the way I experience comfort at home. I love the energy-efficient
                    design, which not only keeps me cool but also aligns with my commitment to a sustainable lifestyle.”
                </p>
            </div>
            <!-- End of Testimonial Card-->

            <!-- Start of Testimonial Card-->
            <div class="w-72 lg:w-72">
                <div class="flex flex-col items-center pb-6">
                    <img class="rounded-full w-32 shadow-inner"
                        src="<?php echo get_template_directory_uri() . "/assets/images/smiling_man_2.webp" ?>" alt="">
                    <span class="text-sm font-bold mt-2 tracking-wider text-gray-600">Rory Ferreira</span>
                    <span class="text-sm text-gray-400">Artist, Milo</span>
                </div>
                <p class="testimonial_statement relative px-6 text-center font-medium text-gray-700">“As a homeowner, I
                    can confidently say that ChillOut air conditioners are a game-changer. The smart
                    climate control features add an extra layer of convenience, allowing me to personalize my comfort
                    effortlessly.”</p>
            </div>
            <!-- End of Testimonial Card-->

        </div>
    </section>

    <!-- Start of 'Get your cool on' Section -->
    <section class="flex justify-center pt-24 pb-24 lg:pb-32 bg-blue-900">
        <div class="fade-in-up-on-scroll flex flex-col items-center w-full">
            <h2 class="text-center px-4 font-bold lg:px-0 text-3xl lg:text-4xl text-blue-50">
                Get Your Cool On
            </h2>
            <p class="mt-8 mb-16 leading-loose text-center max-w-prose lg:w-1/4 text-blue-50">Elevate your comfort
                experience and embrace a new standard in air conditioning that not only keeps you cool but defines your
                space with style and innovation.</p>
            <div class="flex justify-center flex-wrap w-full gap-16">
                <!-- Card -->
                <div class="lg:mb-0 flex flex-col items-center p-8 w-80 rounded-lg shadow-md bg-blue-50">
                    <svg class="mb-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 2V30" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M19.6075 5C18.5188 5.65621 17.2712 6.00203 16 6C14.7288 6.00203 13.4812 5.65621 12.3925 5"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.3925 27C13.4821 26.3457 14.7291 26 16 26C17.2709 26 18.518 26.3457 19.6075 27"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M28.1244 9L3.87563 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M27.3294 13.625C26.2177 13.0085 25.2947 12.1011 24.6593 11.0001C24.0239 9.89912 23.7001 8.64599 23.7225 7.375"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.67062 18.375C5.7823 18.9915 6.70528 19.8989 7.34067 20.9999C7.97605 22.1009 8.2999 23.354 8.2775 24.625"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.87563 9L28.1244 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M4.67062 13.625C5.7823 13.0085 6.70528 12.1011 7.34067 11.0001C7.97605 9.89912 8.2999 8.64599 8.2775 7.375"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M27.3294 18.375C26.2177 18.9915 25.2947 19.8989 24.6593 20.9999C24.0239 22.1009 23.7001 23.354 23.7225 24.625"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mb-4 text-xl font-semibold text-gray-700">Air Conditioners</h3>
                    <p class="leading-relaxed text-sm text-center text-gray-600">Our air conditioners redefine comfort,
                        delivering superior cooling performance that transforms your living spaces.</p>
                    <a href="/products"
                        class="text-sm mt-6 p-2 font-bold border-2 rounded-md border-blue-500 text-blue-500 hover:border-blue-700 hover:text-blue-700 ">EXPLORE</a>
                </div>

                <!-- Card -->
                <div class="flex flex-col items-center p-8 w-80 rounded-lg shadow-md bg-blue-50">
                    <svg class="mb-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 2V30" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M19.6075 5C18.5188 5.65621 17.2712 6.00203 16 6C14.7288 6.00203 13.4812 5.65621 12.3925 5"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.3925 27C13.4821 26.3457 14.7291 26 16 26C17.2709 26 18.518 26.3457 19.6075 27"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M28.1244 9L3.87563 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M27.3294 13.625C26.2177 13.0085 25.2947 12.1011 24.6593 11.0001C24.0239 9.89912 23.7001 8.64599 23.7225 7.375"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.67062 18.375C5.7823 18.9915 6.70528 19.8989 7.34067 20.9999C7.97605 22.1009 8.2999 23.354 8.2775 24.625"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.87563 9L28.1244 23" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M4.67062 13.625C5.7823 13.0085 6.70528 12.1011 7.34067 11.0001C7.97605 9.89912 8.2999 8.64599 8.2775 7.375"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M27.3294 18.375C26.2177 18.9915 25.2947 19.8989 24.6593 20.9999C24.0239 22.1009 23.7001 23.354 23.7225 24.625"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mb-4 text-xl font-semibold text-gray-700">Blog</h3>
                    <p class="leading-relaxed text-sm text-center text-gray-600">Dive into the latest cooling tips, home
                        comfort insights, sustainability news, and the top trends in air
                        conditioning technology.</p>
                    <a href="/blog"
                        class="text-sm mt-6 p-2 font-bold border-2 rounded-md border-blue-500 text-blue-500 hover:border-blue-700 hover:text-blue-700 ">READ
                        MORE</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
<?php wp_footer(); ?>