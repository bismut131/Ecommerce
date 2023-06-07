<template>
    <div class="flex justify-center">
        <div class="bg-white rounded-2xl p-5 sm:mt-5">
            <div class="grid grid-cols-8 gap-x-40 m-3 p-3">
                <p class="font-bold uppercase">name</p>
                <p class="font-bold uppercase">sku</p>
                <p class="font-bold uppercase">type</p>
                <p class="font-bold uppercase">category</p>
                <p class="font-bold uppercase">brand</p>
                <p class="font-bold uppercase">created at</p>
                <p class="font-bold uppercase">updated at</p>
                <div class="flex justify-items-center justify-self-end">
                    <Link :href="route('admin.product.create')">
                        <PrimaryButton>
                            Create
                        </PrimaryButton>
                    </Link>
                </div>
            </div>
            <div class="grid grid-cols-8 gap-x-40 m-3 p-3"
                 v-for="product in products">
                <p>{{ product.name }}</p>
                <p>{{ product.sku }}</p>
                <p>{{ product.configurable ? 'configurable' : 'simple' }}</p>
                <p>{{ product.category.name }}</p>
                <p>{{ product.brand.name }}</p>
                <p>{{ product.created_at }}</p>
                <p>{{ product.updated_at }}</p>
                <Link
                    :href="route('admin.product.show', product.id)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
export default {
    layout: AuthenticatedLayout,

    props: {
        products: {
            required: true,
            type: Object
        }
    },

    components: {
        PrimaryButton,
        Link
    }
}
</script>

