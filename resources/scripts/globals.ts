import _ from 'lodash';

export default {
    install(App) {
        let componentFiles = import.meta.globEager(
            '../views/components/admin/table/fields/*.vue',
        );

        Object.entries(componentFiles).forEach(([path, m]) => {
            // @ts-ignore
            let componentName = _.upperFirst(
                _.camelCase(path.split('/').pop().replace(/\.\w+$/, ''))
            );

            App.component(
                `${componentName}`, m.default
            );
        })

        componentFiles = import.meta.globEager(
            '../views/components/admin/filter/fields/*.vue',
        );

        Object.entries(componentFiles).forEach(([path, m]) => {
            // @ts-ignore
            let componentName = _.upperFirst(
                _.camelCase(path.split('/').pop().replace(/\.\w+$/, ''))
            );

            App.component(
                `${componentName}`, m.default
            );
        })
    },
};
