<template>
    <div class="flex justify-center">
        <div class="bg-white rounded-2xl m-5 p-5 sm:max-w-md grow sm:mt-5">
            <div class="flex justify-between m-3 p-3"
                 v-for="brand in brands">
                <p>
                    {{ brand.name }}
                </p>
                <Link
                    :href="route('admin.brand.edit', brand.id)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                    </svg>
                </Link>
            </div>
            <PrimaryButton class="w-full justify-center mt-2 px-0 py-0">
                <Link
                    class="w-full h-full p-2"
                    :href="route('admin.brand.create')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                    </svg>
                </Link>
            </PrimaryButton>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";

export default {
    layout: AuthenticatedLayout,

    props: {
        brands: {
            required: true,
            type: Array
        }
    },

    components: {
        Link,
        PrimaryButton
    }
}
</script>
