<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    works: Object
})
</script>

<template>
    <Head title="勤怠確認" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">勤怠確認</h2>
        </template>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font">
                        <div class="container py-8 mx-auto">
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Id</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">日付</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始時間</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了時間</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">勤務時間(時間)</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">休憩時間(分)</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">時間外労働(分)</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">備考</th>
                                            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="works in works.data" :key="works.id">
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.id }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.date }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.start_time }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.end_time }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.working_hours }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.break_time }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.overtime_hours }}</td>
                                            <td class="border-b-2 border-gray-200 px-4 py-3">{{ works.note }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    </AuthenticatedLayout>
</template>