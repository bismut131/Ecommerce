<template>
    <div class="flex justify-center">
        <div class="flex bg-white rounded-2xl m-5 p-5 sm:max-w-md sm:mt-5">
            <form @submit.prevent="storeProduct" class="mt-6 space-y-6">
                <div class="mt-3">
                    <InputLabel for="name" value="name" />

                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autocomplete="name"
                    />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-3">
                    <InputLabel for="sku" value="Sku" />

                    <TextInput
                        id="sku"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.sku"
                        required
                        autocomplete="sku"
                    />

                    <InputError class="mt-2" :message="form.errors.sku" />
                </div>
                <div class="mt-3">
                    <InputLabel for="type" value="type" />

                    <TextInput
                        id="type"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.configurable"
                        required
                        autocomplete="type"
                    />

                    <InputError class="mt-2" :message="form.errors.type" />
                </div>
                <div class="mt-3">
                    <InputLabel for="category" value="category" />

                    <TextInput
                        id="category"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.category"
                        required
                        autocomplete="type"
                    />

                    <InputError class="mt-2" :message="form.errors.category" />
                </div>
                <div class="mt-3">
                    <InputLabel for="brand" value="brand" />

                    <TextInput
                        id="brand"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.brand"
                        required
                        autocomplete="type"
                    />

                    <InputError class="mt-2" :message="form.errors.brand" />
                </div>
                <div class="flex justify-items-center justify-self-end">
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
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";

export default {
    layout: AuthenticatedLayout,

    components: {PrimaryButton, InputError, TextInput, InputLabel},

    data() {
        return {
            form: useForm({
                name: null,
                sku: null,
                configurable: null,
                category: null,
                brand: null,
            })
        }
    },

    methods: {
        storeProduct() {
            this.form.transform((data) => ({
                name: data.name,
                sku: data.sku,
                type: data.type,
                configurable: data.configurable === 'simple' ? '0' : '1',
                category: data.category,
                brand: data.brand,
            })).post(route('admin.product.store'))
        }
    }
}
</script>
