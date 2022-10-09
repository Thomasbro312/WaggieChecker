import './bootstrap';

import Alpine from 'alpinejs';
import vue from '@vitejs/plugin-vue'

window.Alpine = Alpine;

window.Vue = vue;

import { createApp } from 'vue'

const app = createApp({})
app.mount('#app')
//app.component("example-component",Example)

Alpine.start();
