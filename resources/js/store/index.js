import { createApp } from 'vue';
import { createStore } from 'vuex';

const store = createStore({
    state: {
        // return {
            sideBarOpen: false
        // }
    },
    getters: {
        sideBarOpen: state => {
            return state.sideBarOpen
        }
    },
    mutations: {
        toggleSidebar (state) {
            state.sideBarOpen = !state.sideBarOpen
        }
    },
    actions: {
        toggleSidebar(context) {
            context.commit('toggleSidebar')
        }
    }
})

export default store
