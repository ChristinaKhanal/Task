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
        name: 'addClient',
        path: '/add-client',
        component: AddClient
    },
    {
        name: 'editClient',
        path: '/edit-client/:id',
        component: EditClient
    },
];
