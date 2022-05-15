import Vue from "vue";
import VueRouter from 'vue-router';
import PostComponent from "./components/PostComponent";
import ArticleComponent from "./components/ArticleComponent";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/posts',
            component: PostComponent,
        },
        {
            path: '/articles',
            component: ArticleComponent,
        },
        {
            path: '/people',
            component: () => import('./components/Person/Index'),
            name: 'person.index',
        },
        {
            path: '/people/create',
            component: () => import('./components/Person/Create'),
            name: 'person.create',
        },
        {
            path: '/people/:id/edit',
            component: () => import('./components/Person/Edit'),
            name: 'person.edit',
        },
        {
            path: '/people/:id',
            component: () => import('./components/Person/Show'),
            name: 'person.show',
        }
    ]
})
