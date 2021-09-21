import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import Home from "./pages/Home";
import Contatti from "./pages/Contatti";
import Posts from "./pages/Posts";


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/contatti',
            name: 'contatti',
            component: Contatti,
        },
        {
            path: '/posts',
            name: 'Posts',
            component: Posts,
        },
    ],
});

export default router;
