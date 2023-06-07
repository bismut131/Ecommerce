<template>
    <div>
        <div class="flex justify-start">
            <div class="flex bg-white rounded-2xl m-5 p-5 sm:min-w-max sm:mt-5">
                <div
                    v-if="!editActive"
                    class="mt-6 space-y-6">
                    <div class="flex flex-row justify-between">
                        <Link :href="route('admin.product.index')" v-if="!editActive">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg>
                        </Link>
                        <div>
                            <div
                                @click="editActive = true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Name:</p>
                        <p>{{ product.name }}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Sku:</p>
                        <p>{{product.sku}}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Type:</p>
                        <p>{{ product.configurable ? 'configurable' : 'simple' }}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Category:</p>
                        <p>{{ product.category.name }}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Brand:</p>
                        <p>{{ product.brand.name }}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Created at:</p>
                        <p class="ml-5">{{ product.created_at }}</p>
                    </div>
                    <div class="flex justify-between mt-3">
                        <p>Updated at:</p>
                        <p class="ml-5">{{ product.updated_at }}</p>
                    </div>
                </div>
                <template v-else>
                    <ProductEdit :product="product"/>
                </template>
            </div>
            <div class="ml-4">
                <div>
                    <Create :product="product" :attributes="attributes"/>
                </div>
            </div>
        </div>
        <div
            class="mt-16 bg-white p-7 flex flex-row flex-wrap gap-y-20 gap-x-20 justify-between rounded-lg"
            v-if="simpleProducts">
            <Index :product="product" :productAttributes="simpleProducts"/>
        </div>
    </div>
</template>

<script>
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import ProductEdit from "@/Pages/Admin/Product/Edit.vue";
import {Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
import Create from "@/Pages/Admin/Product/ProductAttribute/Create.vue";
import Index from "@/Pages/Admin/Product/ProductAttribute/Index.vue";

export default {
    components: {Index, Create, InputError, TextInput, InputLabel, ProductEdit, Link},

    layout: AuthenticatedLayout,

    data() {
        return {
            editActive: false,
        }
    },

    props: {
        product: {
            required: true,
            type: Object
        },

        attributes: {
            required: true,
            type: Object
        },

        simpleProducts: {
            required: true,
            type: Object
        }
    }
}
</script>
