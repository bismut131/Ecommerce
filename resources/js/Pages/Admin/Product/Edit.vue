<template>
    <Link :href="route('admin.product.show', product.id)">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
        </svg>
    </Link>
    <div class="flex justify-center">
        <div class="flex bg-white rounded-2xl m-5 p-5 sm:max-w-md sm:mt-5">
            <form @submit.prevent="updateProduct" class="mt-6 space-y-6">
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
                <div class="mt-3">
                    <InputLabel for="created_at" value="created_at" />

                    <TextInput
                        id="created_at"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.created_at"
                        required
                        autocomplete="type"
                    />

                    <InputError class="mt-2" :message="form.errors.created_at" />
                </div>
                <div class="mt-3">
                    <InputLabel for="updated_at" value="updated_at" />

                    <TextInput
                        id="updated_at"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.created_at"
                        required
                        autocomplete="type"
                    />

                    <InputError class="mt-2" :message="form.errors.updated_at" />
                </div>
                <div class="flex justify-items-center justify-self-end">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
            <form @submit.prevent="form.delete(route('admin.product.destroy', product.id))" class="self-end mt-6 space-y-6">
                <div class="justify-items-center justify-self-end">
                    <PrimaryButton :disabled="form.processing">Delete</PrimaryButton>

                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";name: "Edit"

export default {
    layout: AuthenticatedLayout,

    data() {
        return {
            form: useForm({
                name: this.product.name,
                sku: this.product.sku,
                type: this.product.type,
                configurable: this.product.configurable ? 'configurable' : 'simple',
                category: this.product.category.name,
                brand: this.product.brand.name,
                created_at: this.product.created_at,
                updated_at: this.product.updated_at
            })
        }
    },

    props: {
        product: {
            required: true,
            type: Object
        }
    },

    methods: {
        updateProduct() {
            this.form.transform((data) => ({
                name: data.name,
                sku: data.sku,
                type: data.type,
                configurable: data.configurable === 'simple' ? '0' : '1',
                category: data.category.name,
                brand: data.brand.name,
                created_at: data.created_at,
                updated_at: data.updated_at
            })).put(route('admin.product.update', this.product.id))
        }
    },

    components: {
        PrimaryButton,
        InputError,
        TextInput,
        InputLabel,
        Link
    }
}
</script>
