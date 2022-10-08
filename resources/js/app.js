import './bootstrap';

import Alpine from 'alpinejs';
import * as vue from 'vue'

window.Alpine = Alpine;

window.Vue = vue;

import { createApp } from 'vue'

const app = createApp({})
app.mount('#app')
app.component("example-component",'./components/ExampleComponent.vue')

Alpine.start();
