<?php get_header() ?>
<main class="flex flex-grow flex-col bg-white">
    <?php if(str_ends_with($_SERVER['REQUEST_URI'],"/products/")) : ?>

    <!-- Start of 'Products' Landing -->
    <section class="lg:flex lg:justify-center pt-24 px-4 lg:pt-40 max-w-screen-2xl mx-auto">
        <div class="lg:w-1/2">
            <h1 class="text-xs lg:text-base uppercase font-bold mb-3 lg:mb-6 text-gray-400">Products</h1>
            <p class="font-semibold text-3xl lg:text-5xl max-w-prose text-gray-700">Revolutionary comfort
                with cutting-edge robot air conditioners, delivering the perfect personalized climate control experience
                for every space.</p>
            <div class="pl-4 mt-12 lg:pl-20 lg:mt-24">

                <!-- Product Benefit -->
                <div class="flex items-center mb-10">
                    <div class="flex justify-center items-center w-12 h-12 mr-6 rounded-md bg-blue-600">
                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 4.66667H13L14 6.66667H1L0 4.66667ZM1.33333 8.66667H14.3333L15.3333 10.6667H2.33333L1.33333 8.66667ZM23 19.3333C24.1067 19.3333 25 18.44 25 17.3333C25 16.2267 24.1067 15.3333 23 15.3333C21.8933 15.3333 21 16.2267 21 17.3333C21 18.44 21.8933 19.3333 23 19.3333ZM25 7.33333H21.6667V10.6667H27.6133L25 7.33333ZM9.66667 19.3333C10.7733 19.3333 11.6667 18.44 11.6667 17.3333C11.6667 16.2267 10.7733 15.3333 9.66667 15.3333C8.56 15.3333 7.66667 16.2267 7.66667 17.3333C7.66667 18.44 8.56 19.3333 9.66667 19.3333ZM25.6667 5.33333L29.6667 10.6667V17.3333H27C27 19.5467 25.2133 21.3333 23 21.3333C20.7867 21.3333 19 19.5467 19 17.3333H13.6667C13.6667 19.5467 11.8667 21.3333 9.66667 21.3333C7.45333 21.3333 5.66667 19.5467 5.66667 17.3333H3V12.6667H5.66667V14.6667H6.68C7.41333 13.8533 8.48 13.3333 9.66667 13.3333C10.8533 13.3333 11.92 13.8533 12.6533 14.6667H19V2.66667H3C3 1.18667 4.18667 0 5.66667 0H21.6667V5.33333H25.6667Z"
                                fill="#EFF6FF" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-lg font-semibold text-gray-700">Free Delivery</span>
                        <p class="text-sm font-medium text-gray-500">Cool comfort delivered to your doorstep,
                            hassle-free.</p>
                    </div>
                </div>

                <!-- Product Benefit -->
                <div class="flex items-center mb-10">
                    <div class="flex justify-center items-center w-12 h-12 mr-6 rounded-md bg-blue-600">
                        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 16H2.66667C2.66667 17.44 4.49333 18.6667 6.66667 18.6667C8.84 18.6667 10.6667 17.44 10.6667 16C10.6667 14.5333 9.28 14 6.34667 13.2933C3.52 12.5867 0 11.7067 0 8C0 5.61333 1.96 3.58667 4.66667 2.90667V0H8.66667V2.90667C11.3733 3.58667 13.3333 5.61333 13.3333 8H10.6667C10.6667 6.56 8.84 5.33333 6.66667 5.33333C4.49333 5.33333 2.66667 6.56 2.66667 8C2.66667 9.46667 4.05333 10 6.98667 10.7067C9.81333 11.4133 13.3333 12.2933 13.3333 16C13.3333 18.3867 11.3733 20.4133 8.66667 21.0933V24H4.66667V21.0933C1.96 20.4133 0 18.3867 0 16Z"
                                fill="#EFF6FF" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-lg font-semibold text-gray-700">Money-Back Guarantee</span>
                        <p class="text-sm font-medium text-gray-500">Your comfort guaranteed or your money back.</p>
                    </div>
                </div>

                <!-- Product Benefit -->
                <div class="flex items-center mb-10">
                    <div class="flex justify-center items-center w-12 h-12 mr-6 rounded-md bg-blue-600">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 13.3333C24 20.7333 18.88 27.6533 12 29.3333C5.12 27.6533 0 20.7333 0 13.3333V5.33333L12 0L24 5.33333V13.3333ZM12 26.6667C17 25.3333 21.3333 19.3867 21.3333 13.6267V7.06667L12 2.90667L2.66667 7.06667V13.6267C2.66667 19.3867 7 25.3333 12 26.6667ZM16.0667 20L11.96 17.5333L7.86667 20L8.94667 15.3333L5.33333 12.2133L10.1067 11.8L11.96 7.4L13.8267 11.7867L18.6 12.2L14.9733 15.3333L16.0667 20Z"
                                fill="#EFF6FF" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-lg font-semibold text-gray-700">Lifetime Warranty</span>
                        <p class="text-sm font-medium text-gray-500">Experience worry-free comfort with our lifetime
                            warranty promise.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute lg:relative bottom-20 opacity-10 lg:opacity-100">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/products_landing_plant.webp" ?>"
                alt="Minty fresh plant">
        </div>
    </section>
    <?php endif; ?>

    <section class="flex flex-col w-full px-8 py-16 md:items-center products__container fade-in-out-on-scroll">
        <?php woocommerce_content() ?>
    </section>

</main>
<?php get_footer() ?>
<?php wp_footer(); ?>