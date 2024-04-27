import Vue from 'vue';
import VueRouter from "vue-router";
import PostComponent from "./components/PostComponent.vue";
import TestComponent from "./components/TestComponent.vue";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/posts',
            component: PostComponent,
        },
        {
            path: '/posts/test',
            component: TestComponent,
        }
    ]
})
