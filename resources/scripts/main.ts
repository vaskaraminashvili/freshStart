import route from "ziggy-js";
import { createApp, h } from "vue";
import { createInertiaApp, Link, Head, App } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "vite-plugin-laravel/inertia";
import { InertiaProgress } from "@inertiajs/progress";
import AdminLayout from "@/views/layouts/admin-layout.vue";
import WebLayout from "@/views/layouts/default.vue";
import Card from "@/views/components/admin/card.vue";
import Toast, { useToast } from "vue-toastification";
import "vue-toastification/dist/index.css";
import { toastOptions } from "./customOptions";
import GlobalComponents from './globals'
import { createPinia } from 'pinia'
import "@/sass/app.scss";
import axios from "axios";


axios.defaults.baseURL = 'http://localhost:8000/'; // in future take this from env

//
//
// //////////// maybe use separete main file for admin and web site make them separte. !!!!!!!!!!! leave comments every where for documentation in future
//
//


createInertiaApp({
    resolve: async (name) => {
        let page;

        if (name.startsWith("@.")) {
            // load this direcotry for admin
            name = name.replace("@.", "");
            name = name.replace(".", "/");
            page = resolvePageComponent(
                name,
                import.meta.glob("../views/pages/admin/**/*.vue")
            );
            page.then((module) => {
                module.layout ??= AdminLayout;
            });
        } else {
            // load this direcotry for websiste
            page = resolvePageComponent(
                name,
                import.meta.glob("../views/pages/web/**/*.vue")
            );
            page.then((module) => {
                module.layout ??= WebLayout;
            });
        }

        return page;
    },
    setup({ el, app, props, plugin }) {
        const App = createApp({ render: () => h(app, props) })
            .component("Head", Head)
            .component("Link", Link)
            .component("Card", Card)
            .use(createPinia())
            .use(plugin)
            .use(GlobalComponents) // load global components which are used for admin table and filter . this should not be loading for website in future
            .use(Toast, toastOptions)
            .mixin({ methods: { route } });
        // make toast available globaly (usage this.toast.success("I'm an info toast!");)
        App.config.globalProperties.toast = useToast();
        App.mount(el);
    },
});
// createInertiaApp({
//     resolve: (name) =>
//         resolvePageComponent(name, import.meta.glob("../views/pages/**/*.vue")),
//     setup({ el, app, props, plugin }) {
//         const App = createApp({ render: () => h(app, props) })
//             .use(plugin)
//             .mixin({ methods: { route } });
//         App.mount(el);
//     },
// });

InertiaProgress.init({
    showSpinner: true,
    includeCSS: false
});
