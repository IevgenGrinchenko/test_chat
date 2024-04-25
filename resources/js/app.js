import './bootstrap';
import { createApp } from "vue";
import ChatForm from "./components/ChatForm.vue";
import ChatMessages from "./components/ChatMessage.vue";
const app = createApp({
    el: '#app',

    data() {
        return{
        messages: []
        }
    },

    created() {
        this.fetchMessages();
        Echo.channel('chat')
            // .listen('message.sent', (e) => {
                .listen('MessageSent', (e) => {
                console.log(222, e);
                this.messages.push({
                        message: e.message.message,
                        user: e.user
                    });
                })
            // .listen('UserConnected', (e) => {
            //     console.log(e);
            // });

    },

    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            })
        .then(function (response) {
                // console.log('response: ', response);

            })
                .catch(function (error) {
                    console.log('error: ',error);
                });
        },

        addMessage(message) {
            this.messages.unshift(message);

            axios.post('/messages', message).then(response => {
                console.log(11111111, response.data);
            }).catch(function (error) {
                console.log('error1: ',error);
            });
        },


    }
});
app.component('chat-messages', ChatMessages);
app.component('chat-form', ChatForm);
app.mount('#app');
