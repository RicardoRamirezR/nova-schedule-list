Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-schedule-list',
            path: '/nova-schedule-list',
            component: require('./components/Tool'),
        },
    ])
})
