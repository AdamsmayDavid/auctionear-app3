// start: Sidebar
document.querySelector('.chat-sidebar-profile-toggle').addEventListener('click', function(e) {
    e.preventDefault()
    this.parentElement.classList.toggle('active')
})

document.addEventListener('click', function(e) {
    if(!e.target.matches('.chat-sidebar-profile, .chat-sidebar-profile *')) {
        document.querySelector('.chat-sidebar-profile').classList.remove('active')
    }
})
// end: Sidebar



// start: Coversation
document.querySelectorAll('.conversation-item-dropdown-toggle').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        if(this.parentElement.classList.contains('active')) {
            this.parentElement.classList.remove('active')
        } else {
            document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
                i.classList.remove('active')
            })
            this.parentElement.classList.add('active')
        }
    })
})

document.addEventListener('click', function(e) {
    if(!e.target.matches('.conversation-item-dropdown, .conversation-item-dropdown *')) {
        document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
            i.classList.remove('active')
        })
    }
})

document.querySelectorAll('.conversation-form-input').forEach(function(item) {
    item.addEventListener('input', function() {
        this.rows = this.value.split('\n').length
    })
})

document.querySelectorAll('[data-conversation]').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        document.querySelectorAll('.conversation').forEach(function(i) {
            i.classList.remove('active')
        })
        document.querySelector(this.dataset.conversation).classList.add('active')
    })
})

document.querySelectorAll('.conversation-back').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        this.closest('.conversation').classList.remove('active')
        document.querySelector('.conversation-default').classList.add('active')
    })
})


 
// end: Coversation


$(document).ready(function(){
    // Function to send a message
    function sendMessage(message) {
        // Get current timestamp
        var timestamp = new Date().toLocaleString();

        // Create a new div element for the message
        var messageElement = $("<div>").addClass("message");
        
        // Create a span for message content
        var contentElement = $("<span>").addClass("content").text(message);
        
        // Create a span for timestamp
        var timestampElement = $("<span>").addClass("timestamp").text(" [" + timestamp + "]");
        
        // Append message content and timestamp to the message element
        messageElement.append(contentElement, timestampElement);
        
        // Append the message element to the chat container
        $("#chat-container").append(messageElement);
    }

    // Example of sending a message when a button is clicked
    $("#send-button").click(function(){
        var message = $("#message-input").val(); // Get the message from an input field
        sendMessage(message); // Call the sendMessage function to create and append the message
        $("#message-input").val(""); // Clear the input field after sending the message
    });
});


$(document).ready(function(){
    // Function to send a message
    function sendMessage(sender, message) {
        // Get current timestamp
        var timestamp = new Date().toLocaleString();

        // Create a new div element for the message
        var messageElement = $("<div>").addClass("message");
        
        // Create a span for sender's name
        var senderElement = $("<span>").addClass("sender").text(sender + ": ");
        
        // Create a span for message content
        var contentElement = $("<span>").addClass("content").text(message);
        
        // Create a span for timestamp
        var timestampElement = $("<span>").addClass("timestamp").text(" [" + timestamp + "]");
        
        // Append sender, message content, and timestamp to the message element
        messageElement.append(senderElement, contentElement, timestampElement);
        
        // Append the message element to the chat container
        $("#chat-container").append(messageElement);
    }

    // Example of sending a message when a button is clicked
    $("#send-button-user1").click(function(){
        var message = $("#message-input-user1").val(); // Get the message from user 1's input field
        sendMessage("User 1", message); // Call the sendMessage function to create and append the message
        $("#message-input-user1").val(""); // Clear user 1's input field after sending the message
    });

    $("#send-button-user2").click(function(){
        var message = $("#message-input-user2").val(); // Get the message from user 2's input field
        sendMessage("User 2", message); // Call the sendMessage function to create and append the message
        $("#message-input-user2").val(""); // Clear user 2's input field after sending the message
    });
});