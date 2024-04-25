<template>
    <div class="input-group mb-3 mt-3">
        <input type="text"
               class="form-control"
               placeholder="Type your message here..."
               aria-label="Recipient's username"
               id="btn-input"
               name="message"
               v-model="newMessage" @keyup.enter="sendMessage"
               aria-describedby="button-addon"
        />
        <button class="btn btn-success"
                type="button"
                id="btn-chat" @click="sendMessage"
        >Send</button>
    </div>



<!--    <div class="mb-3 ml-5 mr-5 input-group">-->
<!--        <div class="col-9">-->
<!--            <input-->
<!--            />-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <div class="col-3">&ndash;&gt;-->
<!--&lt;!&ndash;        <span class="input-group-btn">&ndash;&gt;-->
<!--        <button class="btn btn-success input-group-btn btn-lg" id="btn-chat1" @click="sendMessage">Send</button>-->
<!--&lt;!&ndash;        </span>&ndash;&gt;-->
<!--                    </div>-->
<!--    </div>-->
</template>

<script>
    export default {
        name:'ChatForm',
        emits:['messagesent'],
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>
