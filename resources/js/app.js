/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('guess-component', require('./components/Guess.vue').default);
Vue.component('listar-recetas', require('./components/ListarReceta.vue').default);

/*Registra componente de la barra de navegación*/
Vue.component('navegacion-bar', require('./components/NavegacionMenu.vue').default);
/*Registra componente de perfil*/
Vue.component('perfil-usuario', require('./components/Perfil.vue').default);
/*Registra componente de recetario*/
Vue.component('recetario-component', require('./components/Recetario.vue').default);
/*Registra componente de favoritos*/
Vue.component('favorite-component', require('./components/Favorito.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
