import route from "ziggy-js";
import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "vite-plugin-laravel/inertia";
import { InertiaProgress } from "@inertiajs/progress";
import AdminLayout from "@/views/layouts/admin-layout.vue";
import WebLayout from "@/views/layouts/default.vue";
import Card from "@/views/components/admin/card.vue";

import classes from "@/sass/app.scss";
import "@/sass/app.scss";
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
            .use(plugin)
            .mixin({ methods: { route } });
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

InertiaProgress.init();
