import AllClients from './components/AllClients.vue';
import AddClient from './components/AddClient.vue';
import EditClient from './components/EditClient.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllClients
    },
    {
        name: 'add',
        path: '/add',
        component: AddClient
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditClient
    },
];
