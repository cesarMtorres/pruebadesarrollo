import { createRouter, createWebHistory } from 'vue-router'

import Sale from '../components/Sale.vue'

const routes = [
    {
        path: '/dashboard',
        name: 'sale',
        component: sale
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
