<script>
    export default {
        name: "Index",
    }
</script>

<template>
    <div>
        <router-link to="/posts">Posts</router-link>
        <router-link to="/posts/test">Tags</router-link>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
