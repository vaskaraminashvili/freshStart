import _ from 'lodash';

export default {
    install(App) {
        const componentFiles = import.meta.globEager(
            '../views/components/admin/table/fields/*.vue'
        );

        Object.entries(componentFiles).forEach(([path, m]) => {
            const componentName = _.upperFirst(
                _.camelCase(path.split('/').pop().replace(/\.\w+$/, ''))
            );

            App.component(
                `${componentName}`, m.default
            );
        })
    },
};
