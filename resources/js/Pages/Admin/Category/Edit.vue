<template>
    <div class="flex justify-center">
        <Link :href="route('admin.category.index')"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
        </Link>
        <div class="flex justify-center">
            <div class="flex bg-white rounded-2xl m-5 p-5 sm:max-w-md grow sm:mt-5">
                <form @submit.prevent="form.put(route('admin.category.update', category.id))" class="mt-6 space-y-6">
                    <div class="mt-3">
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autocomplete="permission"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="flex justify-items-center justify-self-end">
                        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                        <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                            <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                    </div>
                </form>
                <form @submit.prevent="form.delete(route('admin.category.destroy', category.id))" class="mt-6 space-y-6">
                    <div class="flex justify-items-center justify-self-end">
                        <PrimaryButton :disabled="form.processing">Delete</PrimaryButton>

                        <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                            <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
export default {
    layout: AuthenticatedLayout,

    props: {
        category: {
            required: true,
            type: Object
        }
    },

    data() {
        return {
            form: useForm({
                name: this.category.name
            })
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
