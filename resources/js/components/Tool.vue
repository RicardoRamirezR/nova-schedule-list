<template>
    <div>
        <heading class="mb-6">Schedule List</heading>

            <card>
                <div class="overflow-hidden overflow-x-auto relative">
                    <table class="shcedules table w-full">
                    <thead>
                        <tr>
                            <th>Command</th>
                            <th>Expression</th>
                            <th>Execution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="schedule in schedules">
                            <td :style="style(schedule.execution)">{{ schedule.command }}</td>
                            <td :style="style(schedule.execution)">{{ schedule.expression }}</td>
                            <td :style="style(schedule.execution)">{{ schedule.execution == 'today' ? '' : schedule.execution }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            schedules: [],
        }
    },
    mounted() {
        this.getSchedules();
    },
    methods: {
        style(text) {
            return text == 'today' ? { fontWeight: 700 } : {};
        },
        getSchedules() {
            Nova.request().get('/nova-vendor/nova-schedule-list/index').then(response => {
                this.schedules = response.data;
            });
        },
    },
}
</script>

<style>
    .bold {
        font-weight: bold;
    }
</style>
