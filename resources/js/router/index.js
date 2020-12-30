import Vue from 'vue'
import Router from 'vue-router'
import About from '../components/About'
import Home from '../components/Home'
import Posts from '../components/Posts'

Vue.use(Router)

const routes = [
    {
        path:'/',
        component:Home
    },
    {
        path:'/about',
        component:About
    },
    {
        path:'/posts',
        component:Posts
    }
];

export default new Router({
    mode:'history',
    routes
})