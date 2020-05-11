import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Post from '../components/Posts.vue'
import PostDetails from '../components/PostDetails.vue';
import CategoryPosts from '../components/CategoryPosts.vue';

const routes =[
    {path:'/',component : Post,name:'Post'},
    {path:'/post/:slug',component:PostDetails,name:'PostDetails'},
    {path:'/category/:slug/posts',component:CategoryPosts,name:'CategoryPosts'}
];

const router = new VueRouter({
    routes,hashbang:false,mode:'history'
})

export default router;

