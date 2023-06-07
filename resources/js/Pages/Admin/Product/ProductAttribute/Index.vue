<template>
    <div class="bg-gray-100 p-5 rounded-lg" v-for="productAttribute in productAttributes">
        <Link :href="`/admin/product/${product.id}/productAttribute/${productAttribute.id}/edit`">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
            </svg>
        </Link>
        <p class="font-bold">{{ productAttribute[0].sku_simple }}</p>
        <div
            v-for="(attribute, index) in productAttribute">
            <p v-if="index === 1" class="sm:min-w-full flex justify-between"> <span>SKU(simple product): </span><span>{{ attribute.sku_simple }}</span></p>
            <div v-if="attribute.attribute.code === 'image'" class="mt-3 max-w-xs flex justify-between">
                <img :src="'/storage/'+attribute.attribute_value">
            </div>
            <p v-else class="sm:min-w-full flex justify-between"><span>{{ attribute.attribute.name }}:</span><span>{{ attribute.attribute_value }}</span></p>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    props: {
        productAttributes: {
            required: true,
            type: Object
        },

        product: {
            required: true,
            type: Object
        }
    },

    components: {
        Link,
    },
}
</script>
