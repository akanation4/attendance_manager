<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3'

const props = defineProps({
    'members': Array,
    'start_time': String,
    'end_time': String,
    'errors': Object
})

const form = reactive({
    member_id: null,
    start_time: props.start_time,
    end_time: props.end_time,
    break_time: 0,
    overtime_hours: 0,
})

function submitWork() {
    console.log(props.errorBags)
    router.post('works/store', form)
}
</script>

<template>
    <div v-if="$page.props.flash.message" class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">{{ $page.props.flash.message }}</span>
    </div>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">勤怠登録</h1>
            </div>
            <form @submit.prevent="submitWork">
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="member_id" class="leading-7 text-sm text-gray-600">名前</label><br>
                                <select name="member_id" id="member_id" v-model="form.member_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="">選択してください</option>
                                    <option v-for="member in members" :value="member.id" :key="member.id">
                                        {{ member.name }}
                                    </option>
                                </select>
                                <span class="text-red-500" v-if="errors.member_id">{{ errors.member_id }}</span>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="start_time" class="leading-7 text-sm text-gray-600">開始時間</label>
                                <input type="time" id="start_time" name="start_time" step="900" v-model="form.start_time" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <span class="text-red-500" v-if="errors.start_time">{{ errors.start_time }}</span>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="end_time" class="leading-7 text-sm text-gray-600">終了時間</label>
                                <input type="time" id="end_time" name="end_time" step="900" v-model="form.end_time" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="break_time" class="leading-7 text-sm text-gray-600">休憩時間(分)</label>
                                <input type="number" id="break_time" name="break_time" min="0" max="60" step="15" v-model="form.break_time" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="overtime_hours" class="leading-7 text-sm text-gray-600">時間外労働(分)</label>
                                <input type="number" id="overtime_hours" name="overtime_hours" min="0" max="180" step="15" v-model="form.overtime_hours" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="note" class="leading-7 text-sm text-gray-600">備考</label>
                                <textarea id="note" name="note" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">登録</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>
