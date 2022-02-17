import { createRouter, createWebHistory } from 'vue-router'

import CustomerIndex from '../components/CustomerIndex.vue'

const routes = [
    {
        path: '/dashboard',
        name: 'customer.index',
        component: CustomerIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
