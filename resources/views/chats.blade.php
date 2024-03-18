@extends('layouts.app')

@section('content')

        <!-- Fonts -->
        @vite('resources/js/app.js')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/tailwindcss-colors.css">
        <link rel="stylesheet" href="assets/css/chatStyling.css">
        <title>Chat</title>
    
 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <!-- start: Chat -->
        
 
    <section class="chat-section">
        <div class="chat-container bg-warning shadow">
            <!-- start: Sidebar -->
            
                        <button type="button" class="chat-sidebar-profile-toggle">
                    
                        </button>
              
            <!-- end: Sidebar -->
            <!-- start: Content -->
            <div class="chat-content bg-warning shadow">
                <!-- start: Content side -->
                <div class="content-sidebar">
                    <div class="content-sidebar-title">Chats</div>
                    <form action="" class="content-sidebar-form">
                        <input type="search" class="content-sidebar-input" placeholder="Search...">
                        <button type="submit" class="content-sidebar-submit"><i class="ri-search-line"></i></button>
                    </form>
                    <div class="content-messages">
                        <ul class="content-messages-list">

                            <li class="content-message-title"><span>Recently</span></li>

                            @foreach($conversations as $conversation)
                                    <li>
                                        <a href="#" data-conversation="#conversation-{{$conversation->con_id}}">
                                            <span class="content-message-info">
                                                 <span class="content-message-name">{{ Auth::user()->name }} {{$conversation->con_id}}</span> <!--user 2 -->
                                                <!-- <span class="content-message-text">Lorem ipsum dolor sit amet consectetur.</span> -->
                                            </span>
                                            <span class="content-message-more">
                                                <!-- <span class="content-message-unread">5</span> -->
                                                <!-- <span class="content-message-time">12:30</span> -->
                                            </span>
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                    
                    </div>
                </div>
                <!-- end: Content side -->
                <!-- start: Conversation -->
                <div class="conversation conversation-default active">
                    <i class="ri-chat-3-line"></i>
                    <p>Select chat and view conversation!</p>
                </div>


                @foreach($conversations as $conversation)
                <div class="conversation" id="conversation-{{$conversation->con_id}}">
                <div class="conversation-top">
                    <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                    <div class="conversation-user">
                        <div>
                            <div class="conversation-user-name">{{ Auth::user()->name }}</div>
                            <div class="conversation-user-status online">online</div>
                        </div>
                    </div>
                    <!-- <div class="conversation-buttons">
                        <button type="button"><i class="ri-phone-fill"></i></button>
                        <button type="button"><i class="ri-vidicon-line"></i></button>
                        <button type="button"><i class="ri-information-line"></i></button>
                    </div> -->
                </div>
                <div class="conversation-main">

                    <ul class="conversation-wrapper" id="convo-{{$conversation->con_id}}">
                        <div class="coversation-divider"><span>Today</span></div>

                            @foreach($messages as $message)
                                @if($message->con_id == $conversation->con_id)  
                                    @if($message->sender_id == Auth::id())                                                    
                                        <div class="conversation-item">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text">
                                                    <p>{{$message->content}}</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="conversation-item-me">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary shadow">
                                                    <p>{{$message->content}}</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                            
                                                                
                </div>
                <div class="conversation-form">
                    <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                    <div class="conversation-form-group">
                    <input type="hidden" id="con_id" value="{{$conversation->con_id}}">
                    <textarea id="message{{$conversation->con_id}}" class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                        <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
                    </div>
                    <button id="send_message{{$conversation->con_id}}" type="sumbit"  class="conversation-form-button conversation-form-submit bg-primary"><i class="ri-send-plane-2-line"></i></button> <!-- onclick="sendMessage()" -->

                </div>
            </div>
            @endforeach

                
            </div>
            <!-- end: Content -->
        </div>
    </section>
    <!-- end: Chat -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    


            <!-- script file -->
            <!-- <script src="assets/js/jquery.min.js"></script> -->
            <!-- <script src="assets/js/owlcarousel/owl.carousel.min.js"></script> -->
            <script src="assets/js/main.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

               <!-- script file -->
     

@foreach($conversations as $conversation)
<script>
      $(document).ready(function() {

        //para sa Web toh par
           
             $('#send_message{{$conversation->con_id}}').click(function() {
                var message = $('#message{{$conversation->con_id}}').val();
                var con_id = $('#con_id').val();
                if (message.trim() !== '') {
                    // AJAX request to send the message to the server
                    $.ajax({
                        method: 'POST',
                        url: '/send_message', // Replace with your route
                        data: 
                        { 
                          _token: '{{ csrf_token() }}',
                          message: message,
                          channel: '{{$conversation->con_id}}',
                          sender: "{{Auth::id()}}",
                        },
                        success: function(response) {
                            // Handle success if needed
                            $('#message{{$conversation->con_id}}').val('');
                            console.log('Message Response: ', response);
                            

                            if (response == 'failed') {
                                // Log or display validation errors


                                const errors = response;

                                // Clear any existing error messages
                                const validationErrorsDiv = document.getElementById('validation-errors2');
                                validationErrorsDiv.innerHTML = '';
                                

                                // Create and append error messages
                                for (const field in errors) {
                                    if (errors.hasOwnProperty(field)) {
                                        //const errorMessages = errors[field].join('<br>'); or 
                                        const errorMessages = errors.join('<br>'); // Combine multiple error messages for the field
                                        const errorMessageElement = document.createElement('div');
                                        errorMessageElement.classList.add("new");
                                        errorMessageElement.innerHTML = `<div class="alert alert-danger"><h2>Please Provide Higher Bid</2></div>`;
                                        validationErrorsDiv.appendChild(errorMessageElement);
                                    }
                                }

                                

                            } else {
                                // Handle other errors
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                            console.log('Error sending message: ', error);
                        }
                    });
                }
            });


  });
</script>

<script>
    setTimeout(() => {
        //window.Echo.channel for public
        //window.Echo.private for private
        window.Echo.channel('messageSender.user.{{$conversation->con_id}}')
        .listen('.message', (data) => {
            console.log(data.message);

        // Update UI with received message
        let message = data.message;
        let sender = data.sender;
        // let profile_img = data.profile_img;
        // let on_time = data.bid_on;

        // let list = document.createElement("li");
        // list.innerText = `${bidder_id} - ` + bid_price;

        if (sender.trim() == '{{Auth::id()}}') {

            let message_wrap = document.createElement('div');
        message_wrap.classList.add('conversation-item'); //message_wrap.classList.add('conversation-item-me');

        let message_box = document.createElement('div');
        message_box.classList.add('conversation-item-box');

        message_wrap.appendChild(message_box);

        let message_text = document.createElement('div');
        message_text.classList.add('conversation-item-text');

        message_box.appendChild(message_text);

        let message_par = document.createElement('p');
        message_par.innerText = `${message} `;

        message_text.appendChild(message_par);

        let message_time = document.createElement('div');
        message_time.classList.add('conversation-item-time');
        message_time.innerText = "12:01";

        message_text.appendChild(message_time);


        document.getElementById("convo-{{$conversation->con_id}}").append(message_wrap);

        }
        else
        {

        let message_wrap = document.createElement('div');
        message_wrap.classList.add('conversation-item-me'); //message_wrap.classList.add('conversation-item-me');

        let message_box = document.createElement('div');
        message_box.classList.add('conversation-item-box');

        message_wrap.appendChild(message_box);

        let message_text = document.createElement('div');
        message_text.classList.add('conversation-item-text');
        message_text.classList.add('bg-primary');
        message_text.classList.add('shadow');

        message_box.appendChild(message_text);

        let message_par = document.createElement('p');
        message_par.innerText = `${message} `;

        message_text.appendChild(message_par);

        let message_time = document.createElement('div');
        message_time.classList.add('conversation-item-time');
        message_time.innerText = "12:01";

        message_text.appendChild(message_time);


        document.getElementById("convo-{{$conversation->con_id}}").append(message_wrap);

        }

        })
    }, 200)

    // setTimeout(() => {
    //     window.Echo.private('myPrivateChannel.user.{{Auth::id()}}')
    //     .listen('.private_msg', (e) => {
    //         console.log(e);
    //     })
    // }, 200)


    /* for public channel
    setTimeout(() => {
        window.Echo.channel('testing')
        .listen('.MyWebSocket', (e) => {
            console.log(e);
        })
    }, 200)
    */
</script>
@endforeach








<!-- <script>
    function sendMessage(){

        let message_wrap = document.createElement('div');
        message_wrap.classList.add('conversation-item'); //message_wrap.classList.add('conversation-item-me');

        let message_box = document.createElement('div');
        message_box.classList.add('conversation-item-box');

        message_wrap.appendChild(message_box);

        let message_text = document.createElement('div');
        message_text.classList.add('conversation-item-text');

        message_box.appendChild(message_text);

        let message_par = document.createElement('p');
        message_par.innerText = "Hello";

        message_text.appendChild(message_par);

        let message_time = document.createElement('div');
        message_time.classList.add('conversation-item-time');
        message_time.innerText = "12:01";

        message_text.appendChild(message_time);


        document.getElementById("convo").append(message_wrap);

    }
</script> -->

    <!-- <script>

        $(document).ready(function() {

        //para sa Web toh par
        
            $('#send_message').click(function() {
                        const conversation = document.getElementById('conversation');

                        let message_wrap = document.createElement('div');
                        message_wrap.classList.add('convesation-item');

                        let message_box = document.createElement('div');
                        message_box.classList.add('conversation-item-box');

                        message_wrap.appendChild(message_box);

                        let message_text = document.createElement('div');
                        message_text.classList.add('conversation-item-text');

                        message_box.appendChild(message_text);

                        let message_par = document.createElement('p');
                        message_par.innnerText = "Hello";

                        message_box.appendChild(message_par);

                        let message_time = document.createElement('div');

                        message_box.appendChild(message_time);


                        $("conversation").prepend(message_wrap);
            });

        });
</script> -->
<script src="assets/js/script.js"></script>

 </body>
@endsection