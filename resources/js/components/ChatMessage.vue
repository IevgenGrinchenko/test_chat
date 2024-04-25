
<template>
    <ul class="chat" style="max-height: 80vh; overflow-y: scroll;">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p class="text-danger">
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        name: 'ChatMessages',
        props: ['messages']
    };
</script>
