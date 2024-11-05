<template>
    <div>
        <!--<< Breadcrumb Section Start >>-->
        <breadcrumb :currentTitle="pageTitle" :breadcrumbItems="breadcrumbs"  ></breadcrumb>
        <!-- About Section Start -->
        <section class="about-section section-padding fix bg-cover"
                 style="background-image: url('/vendor/assets/img/service/service-bg-2.jpg');">
            <div class="container">
                <div class="about-wrapper style-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="circle-shape">
                                    <img src="/vendor/assets/img/about/circle.png" alt="shape-img">
                                </div>
                                <div class="counter-shape float-bob-y">
                                    <div class="icon">
                                        <img src="/vendor/assets/img/about/icon-1.svg" alt="icon-img">
                                    </div>
                                    <div class="content">
                                        <h3><span class="count">5</span>Years</h3>
                                        <p>Of Experience</p>
                                    </div>
                                </div>
                                <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s"
                                     style="background-image: url('/vendor/assets/img/about/03.jpg');">
                                    <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                        <img src="/vendor/assets/img/about/04.jpg" alt="about-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title mb-3 mxw-650">
                                    <div class="subtitle"> <img src="/vendor/assets/img/icon/arrowLeft.svg" alt="icon"> <span>ABOUT
                                        UniSoft
                                    </span><img src="/vendor/assets/img/icon/arrowRight.svg" alt="icon"></div>
                                    <h2 class="title"> We Are Increasing Business Success With <span>Technology</span> </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    UniSoft is a fast-growing startup software company in Bangladesh that specializes in developing websites, Android apps, iOS apps, and web-based applications. With a focus on innovation and user experience, UniSoft provides tailored digital solutions to help businesses enhance their online presence and improve operational efficiency. The company’s expertise in multi-platform development ensures seamless and effective software for clients across various industries.
                                </p>
                                <div class="about-icon-items">
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                        <div class="icon">
                                            <img src="/vendor/assets/img/about/icon-4.svg" alt="icon-img">
                                        </div>
                                        <div class="content">
                                            <h4>Our Mission</h4>
                                            <p>
                                                To provide innovative software solutions that enhance business efficiency and drive growth.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                        <div class="icon">
                                            <img src="/vendor/assets/img/about/icon-5.svg" alt="icon-img">
                                        </div>
                                        <div class="content">
                                            <h4>Our Vision</h4>
                                            <p>
                                                To be a leading provider of transformative technology solutions for businesses worldwide.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
         <!-- Project Section Start -->
        <Projects></Projects>
        <!--<< Marque Section Start >>-->
        <Marque></Marque>

        <!--<< Team Section Start >>-->
        <TeamMembers></TeamMembers>

    </div>



</template>

<script>

import {defineComponent} from "vue";
import Projects from "@/components/Projects.vue";
import Marque from "@/components/Marque.vue";
import Brands from "@/components/Brands.vue";
import TeamMembers from "@/components/TeamMembers.vue";
import Breadcrumb from "@/components/BreadCrumb.vue";

export default defineComponent({
    components: {Breadcrumb, TeamMembers, Brands, Marque, Projects},
    data() {
        return {
            pageTitle: 'About Us',
            breadcrumbs: [
                { text: 'Home', link: '/' },
                { text: 'About Us' },
            ],
        };
    },
})
</script>

