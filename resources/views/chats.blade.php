@extends('layouts.app')

@section('content')

        <!-- Fonts -->
        @vite('resources/js/app.js')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwindcss-colors.css">
    <link rel="stylesheet" href="assets/css/chatStyling.css">
    <title>Chat</title>
    


    <!-- start: Chat -->
    <section class="chat-section">
        <div class="chat-container">
            <!-- start: Sidebar -->
            
                        <button type="button" class="chat-sidebar-profile-toggle">
                    
                        </button>
              
            <!-- end: Sidebar -->
            <!-- start: Content -->
            <div class="chat-content">
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
                            <li>
                                <a href="#" data-conversation="#conversation-1">
                                    <img class="content-message-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                    <span class="content-message-info">
                                        <span class="content-message-name">Jake Samson</span>
                                        <span class="content-message-text">Lorem ipsum dolor sit amet consectetur.</span>
                                    </span>
                                    <span class="content-message-more">
                                        <span class="content-message-unread">5</span>
                                        <span class="content-message-time">12:30</span>
                                    </span>
                                </a>
                            </li>

                            <!-- CONVERSATION USER 2 -->
                            <!-- <li>
                                <a href="#" data-conversation="#conversation-2">
                                    <img class="content-message-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                    <span class="content-message-info">
                                        <span class="content-message-name">Joshua Salazar</span>
                                        <span class="content-message-text">Lorem ipsum dolor sit amet consectetur.</span>
                                    </span>
                                    <span class="content-message-more">
                                        <span class="content-message-time">12:30</span>
                                    </span>
                                </a>
                            </li> -->

                            <!-- CONVERSATION USER 2 END-->
                            
                        </ul>
                    
                    </div>
                </div>
                <!-- end: Content side -->
                <!-- start: Conversation -->
                <div class="conversation conversation-default active">
                    <i class="ri-chat-3-line"></i>
                    <p>Select chat and view conversation!</p>
                </div>



                <div class="conversation" id="conversation-1">
                    <div class="conversation-top">
                        <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                        <div class="conversation-user">
                            <img class="conversation-user-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                            <div>
                                <div class="conversation-user-name">Someone</div>
                                <div class="conversation-user-status online">online</div>
                            </div>
                        </div>
                        <div class="conversation-buttons">
                            <button type="button"><i class="ri-phone-fill"></i></button>
                            <button type="button"><i class="ri-vidicon-line"></i></button>
                            <button type="button"><i class="ri-information-line"></i></button>
                        </div>
                    </div>


                    <div class="conversation-main">

                        <ul class="conversation-wrapper" id="convo">
                            <div class="coversation-divider"><span>Today</span></div>
<<<<<<< HEAD

                                    <div class="conversation-item-me">
                                        <div class="conversation-item-box">
=======
                            <li class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div  class="conversation-item-box">
>>>>>>> 5fa94053606992fb92c9ccd0f3d936191d60c3ef
                                            <div class="conversation-item-text">
                                                <p>User 1Green Testing afssa Testingfdg dfgdfgdfgd dfg dfsgd 
                                                Testingfdg dfgdfgdfgd  Green Testing dfg dfsgd gdgd dfgTestingfdg dfgdfgdfgd dfg dfsgd gdgd dfg
                                                gdgd dfgTestingfdg dfgdfgdfgd dfg dfsgd gdgd dfgTe Green Testing stingfdg dfgdfgdfgd dfg dfsgd gdgd dfg </p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="conversation-item">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>User 1White Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfg vWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd
                                                     dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfg </p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                        </div>
                                    </div>
<<<<<<< HEAD


                    </div>


                    <div class="conversation-form">
                        <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                        <!-- <input type="text" id="username" placeholder="Enter your username"> -->
                        <textarea id="message" class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                            <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
                        </div>
                        <button id="send_message" type="sumbit"  class="conversation-form-button conversation-form-submit"><i class="ri-send-plane-2-line"></i></button> <!-- onclick="sendMessage()" -->
=======
                                </div>
                            </li>
                            <li class="conversation-item ">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>aaaLorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos ab in?</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis. Iste natus est aliquam ipsum doloremque fugiat, quidem eos autem? Dolor quisquam laboriosam enim cum laborum suscipit perferendis adipisci praesentium.</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li  class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, eos, magni temporibus, placeat consectetur nobis incidunt dicta a culpa vel esse. Facilis fugiat possimus eveniet accusamus dignissimos pariatur inventore animi rem vero, eligendi obcaecati fugit quaerat? Officia ex quod eaque maxime ipsam, tempore error laboriosam laborum, magnam ipsum doloremque quas.</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus debitis odio maiores perferendis ipsa repudiandae amet blanditiis quod. Ullam, dolorum.</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div  class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div id="chat-container" class="conversation-item-text">
                                                <div id="timestamp" class="conversation-item-time"> </div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                                        <!-- bidders -->
                    <div class="conversation-form">
                        <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                        <textarea id="message-input-user1" class="conversation-form-input" rows="1" placeholder="bidders"></textarea>
                            <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
                        </div>
                        <button  id="send-button-user1" type="button" class="conversation-form-button conversation-form-submit"><i class="ri-send-plane-2-line"></i></button>
                    </div>

                            <!-- seller -->
                    <div class="conversation-form ">
                        <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                        <textarea id="message-input-user2" class="conversation-form-input" rows="1" placeholder="seller"></textarea>
                            <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
                        </div>
                        <button  id="send-button-user2" type="button" class="conversation-form-button conversation-form-submit"><i class="ri-send-plane-2-line"></i></button>
>>>>>>> 5fa94053606992fb92c9ccd0f3d936191d60c3ef
                    </div>
                </div>

                <!--  CONVERSATION USER 2  -->
                <!-- <div class="conversation" id="conversation-2">
                    <div class="conversation-top">
                        <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                        <div class="conversation-user">
                            <img class="conversation-user-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                            <div>
                                <div class="conversation-user-name">Someone 1</div>
                                <div class="conversation-user-status online">online</div>
                            </div>
                        </div>
                        <div class="conversation-buttons">
                            <button type="button"><i class="ri-phone-fill"></i></button>
                            <button type="button"><i class="ri-vidicon-line"></i></button>
                            <button type="button"><i class="ri-information-line"></i></button>
                        </div>
                    </div>
                    <div class="conversation-main">
                        <ul class="conversation-wrapper">
                            <div class="coversation-divider"><span>Today</span></div>

                            
                            <div class="conversation-item me">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>User 2 Green Testing afssa Testingfdg dfgdfgdfgd dfg dfsgd 
                                                Testingfdg dfgdfgdfgd  Green Testing dfg dfsgd gdgd dfgTestingfdg dfgdfgdfgd dfg dfsgd gdgd dfg
                                                gdgd dfgTestingfdg dfgdfgdfgd dfg dfsgd gdgd dfgTe Green Testing stingfdg dfgdfgdfgd dfg dfsgd gdgd dfg </p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="conversation-item">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>User 2White Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfg vWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd
                                                     dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfgWhite Testingfdg dfgdfgdfgd dfg dfsgd gdgd dfg </p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                          
                        </ul>
                    </div>

                    <div class="conversation-form">
                        <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                        <textarea id="message" class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                            <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
                        </div>
                        <button type="button" onclick="sendMessage()" class="conversation-form-button conversation-form-submit"><i class="ri-send-plane-2-line"></i></button>
                    </div> -->
                    <!-- CONVERSATION USER 2 -->
                <!-- end: Conversation -->
                


                
            </div>
            <!-- end: Content -->
        </div>
    </section>
    <!-- end: Chat -->
<<<<<<< HEAD
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
=======
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
>>>>>>> 5fa94053606992fb92c9ccd0f3d936191d60c3ef
    


<!-- script file -->
<script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
      $(document).ready(function() {

        //para sa Web toh par
           
             $('#send_message').click(function() {
                var message = $('#message').val();
                if (message.trim() !== '') {
                    // AJAX request to send the message to the server
                    $.ajax({
                        method: 'POST',
                        url: '/send_message', // Replace with your route
                        data: 
                        { 
                          _token: '{{ csrf_token() }}',
                          message: message,
                          channel: '{{Auth::id()}}',
                          bidder: "{{ Auth::user()['name'] }}",
                        },
                        success: function(response) {
                            // Handle success if needed
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
        window.Echo.channel('messageChannel.user.{{Auth::id()}}')
        .listen('.message', (data) => {
            console.log(data.message);

        // Update UI with received message
        let message = data.message;
        let bidder_id = data.bidder;
        // let profile_img = data.profile_img;
        // let on_time = data.bid_on;

        // let list = document.createElement("li");
        // list.innerText = `${bidder_id} - ` + bid_price;

        if (message.trim() == '2') {

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


        document.getElementById("convo").append(message_wrap);
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

        message_box.appendChild(message_text);

        let message_par = document.createElement('p');
        message_par.innerText = `${message} `;

        message_text.appendChild(message_par);

        let message_time = document.createElement('div');
        message_time.classList.add('conversation-item-time');
        message_time.innerText = "12:01";

        message_text.appendChild(message_time);


        document.getElementById("convo").append(message_wrap);
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
@endsection