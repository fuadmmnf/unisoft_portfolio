<template>
    <div class="breadcrumb-wrapper bg-cover">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ currentTitle }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li v-for="(item, index) in breadcrumbItems" :key="index">
                        <router-link v-if="item.link" :to="item.link">{{ item.text }}</router-link>
                        <span v-else>{{ item.text }}</span>
                        <span v-if="index < breadcrumbItems.length - 1">
              <i class="fas fa-chevron-right"></i>
            </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Breadcrumb",
    props: {
        currentTitle: {
            type: String,
            required: true,
        },
        breadcrumbItems: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style scoped>
.breadcrumb-wrapper {
    /* Add your custom styles here */
}
</style>
