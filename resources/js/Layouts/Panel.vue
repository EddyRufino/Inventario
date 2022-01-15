<template>
    <div class="leading-normal tracking-normal" id="main-body">
        <div class="flex flex-wrap">

            <Sidebar />

            <div class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen" :class="sideBarOpen ? 'overlay' : ''" id="main-content">

                <Navbar />

                <!-- Page Content -->
                <slot />

                <Footer />
            </div>
        </div>
    </div>
</template>

<script >
import { mapState } from 'vuex'
import Sidebar from '@/Components/Admin/Sidebar'
import Navbar from '@/Components/Admin/Navbar'
import Footer from '@/Components/Admin/Footer'

export default {
    components: {
        Sidebar,
        Navbar,
        Footer
    },
    computed: {
        ...mapState(['sideBarOpen'])
    },
}
</script>
