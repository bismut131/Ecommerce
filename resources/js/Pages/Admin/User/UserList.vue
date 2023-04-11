<template>
    <div class="flex justify-center">
        <div class="bg-white rounded-2xl m-5 p-5 sm:max-w-md grow sm:mt-5">
            <div class="flex justify-between m-3 p-3"
                 v-for="user in users">
                <p>
                    {{ user.name }}
                    <span class="text-gray-400 text-xs">
                    {{ user.role }}
                </span>
                </p>
                <Link
                    :href="route('admin.user.show', user.id)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </Link>
            </div>
            <PrimaryButton class="w-full justify-center mt-2 px-0 py-0">
                <Link
                    class="w-full h-full p-2"
                    :href="route('admin.user.create')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                </Link>
            </PrimaryButton>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";

export default {
    layout: AuthenticatedLayout,

    props: {
        users: {
            type: Array,
            required: true
        }
    },

    components: {
        PrimaryButton,
        Link
    }
}
</script>

