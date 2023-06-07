<template>
    <div class="flex justify-center">
        <div class="flex flex-col grow bg-white rounded-2xl m-5 p-5 justify-between sm:mt-5">
            <form @submit.prevent="form.post(route('admin.product.productAttribute.store', product.id))" class="flex flex-wrap gap-x-4 gap-y-3 mt-6 space-y-6">
                <div class="mt-6">
                    <InputLabel for="sku_simple" value="sku simple" />

                    <TextInput
                        id="sku_simple"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.sku_simple"
                        required
                        autocomplete="sku_simple"
                    />

                    <InputError class="mt-2" :message="form.errors.sku_simple" />
                </div>
                <div
                    v-for="attribute  in attributes"
                    class="mt-3">
                    <InputLabel for="attribute_value" :value="attribute.name" />

                    <FileInput
                        v-if="attribute.code === 'image'"
                        id="attribute_value"
                        type="file"
                        class="mt-1 block w-full"
                        @input="form.image = $event.target.files[0]"
                        autocomplete="attribute_value"
                    />

                    <TextInput
                        v-else
                        id="attribute_value"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.attribute[attribute.id]"
                        autocomplete="attribute_value"
                    />

                    <InputError class="mt-2" :message="form.errors[attribute.id]" />
                </div>
                <div class="flex justify-items-center min-h-22 self-end">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";
import FileInput from "@/Pages/Admin/Components/FileInput.vue";

export default {
    components: {FileInput, PrimaryButton, InputError, TextInput, InputLabel},

    props: {
        attributes: {
            required: true,
            type: Object
        },

        product: {
            required: true,
            type: Object
        }
    },

    data() {
        return {
            form: useForm({
                sku_simple: '',
                attribute: {},
                product_id: this.product.id,
                image: null
            })

        }
    },

    methods: {

    }
}
</script>
