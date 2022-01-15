<template>
    <div class="leading-normal tracking-normal" id="main-body">
        <div class="flex flex-wrap">

            <Sidebar />

            <div class="w-full bg-gray-50 pl-0 lg:pl-64 min-h-screen" :class="sideBarOpen ? 'overlay' : ''" id="main-content">

                <Navbar />

                <!-- Page Content -->
                <slot />

                <Footer />
            </div>
        </div>
    </div>
</template>

<script setup>

import Sidebar from '@/Components/Admin/Sidebar'
import Navbar from '@/Components/Admin/Navbar'
import Footer from '@/Components/Admin/Footer'

components: {
    Sidebar,
    Navbar,
    Footer
}
</script>
