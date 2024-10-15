<template>
  <Header></Header>
     <RouterView></RouterView>
<!--  <Footer></Footer>-->
</template>

<script >


import Header from "@/components/Header.vue";
import Home from "@/pages/Home.vue";
import Footer from "@/components/Footer.vue";
import {defineComponent} from "vue";
export default defineComponent({
    components: {Header,Home,Footer}
})
</script>
