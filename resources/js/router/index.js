// src/router/index.js

import { createRouter, createWebHistory } from 'vue-router';

// Import your components
import Home from '../pages/Home.vue';
import About from '../pages/About.vue';
import {add_script, rem_script} from "../../external.js";


// Define routes
const routes = [
    {
        path: '/',
        name: 'Home',
        component: ()=>import('../pages/Home.vue'),
    },
    {
        path: '/about',
        name: 'About',
        component: ()=>import('../pages/About.vue'),
    },
    {
        path: '/our-service',
        name: 'Services',
        component: ()=>import('../pages/OurService.vue'),
    },
    {
        path: '/contact',
        name: 'Contact',
        component: ()=>import('../pages/ContactUs.vue'),
    },

];

// Create router instance
const router = createRouter({
    history: createWebHistory(),
    routes,
});
router.beforeEach((to, from, next) => {
    // Add your script
    add_script('/vendor/assets/js/main.js');
    next()
})
router.afterEach(() => {

    rem_script('/vendor/assets/js/main.js');

})

export default router;
