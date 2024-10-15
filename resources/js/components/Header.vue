<template>
    <header>
        <div class="header-top-section top-style-3">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">info@example.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:2086660112">+208-666-0112</a>
                        </li>
                    </ul>
                    <div class="top-right">
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="header-sticky" class="header-3">
            <div class="plane-shape">
                <!-- <img src="assets/img/" alt="Unisoft"> -->
            </div>
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <router-link to="/" class="header-logo">
                                    <!-- <img src="assets/img/" alt="logo-img"> -->
                                </router-link>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <router-link to="/">Home</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/about">About Us</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/our-service">Our Services</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/contact">Contact</router-link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <router-link to="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></router-link>
                            <div class="header-button">
                                <router-link to="/contact" class="theme-btn bg-white">
                <span>
                  Need Assistance?
                  <i class="fa-solid fa-arrow-right-long"></i>
                </span>
                                </router-link>
                            </div>
                            <div class="header__hamburger d-lg-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</template>
