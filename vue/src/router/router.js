import PageMain from '@/pages/PageMain.vue';
import PageSetting from '@/pages/PageSetting.vue';
import PageRegistration from '@/pages/PageRegistration.vue';
import PageLogin from '@/pages/PageLogin';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        component: PageMain
    },
    {
        path: '/setting',
        component: PageSetting
    },
    {
        path: '/registration',
        component: PageRegistration
    },
    {
        path: '/login',
        component: PageLogin
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;